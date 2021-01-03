<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $config;
    public $rules;
    public $route;
    public $label;
    public $edit;

    
    public function __construct()
    {

    }

    /**
     * Index padrão
     * 
     * @param   string      $config    Config da rota
     * 
     * @return  View
     */
    public function index(string $config)
    {
        // Inicia config
        $this->getConfig($config);

        // Faz busca para listar
        $controller = $this->controller;
        $newObj = new $controller();
        $data = $newObj->data($this->config->index->select);

        //Cria view
        return view('admin.default.index')
                ->with('data', $data)
                ->with('config', $this->config)
                ->with('thead', $this->config->index->thead)
                ->with('breadcrumbs', $this->getBreadcrumbs());
    }
    
    /**
     * Create padrão
     * 
     * @param   string      $config    Config da rota
     * 
     * @return  View
     */
    public function create(string $config)
    {
        // Inicia config
        $this->getConfig($config);

        // Cria view
        return view('admin.default.create')
            ->with('config', $this->config)
            ->with('breadcrumbs', $this->getBreadcrumbs('inserir'));
    }
    
    /**
     * Store padrão
     * 
     * @param   string      $config    Config da rota
     * @param   Request     $request   Dados da requisição
     * 
     * @return  Redirect               Index
     */
    public function store(string $config, Request $request)
    {
        // Inicia config
        $this->getConfig($config);

        // Inicia controller
        $controller = $this->controller;
        $newObj = new $controller();

        // Valida requisição
        $validator = $this->makeValidation($request, $newObj->getRules());
        if ($validator) return back()->withInput()->withErrors($validator);
        
        // Salva registro
        $data = $newObj->saveData($request);

        // Redireciona para index
        return Redirect::route('admin.listar', ['config' => $config])
            ->with('success', config('message.insert'));
    }

    /**
     * Edit padrão
     * 
     * @param   string      $config     Config da rota
     * @param   int         $id         Identificador do registro
     * 
     * @return  View
     */
    public function edit(string $config, int $id)
    {
        // Inicia config
        $this->getConfig($config);

        // Inicia controller
        $controller = $this->controller;
        $newObj = new $controller();

        // Faz busca
        $data = $newObj->editData($id);

        // Cria view
        return view('admin.default.edit')
            ->with('data', $data)
            ->with('config', $this->config)
            ->with('breadcrumbs', $this->getBreadcrumbs('editar'));
    }
    
    /**
     * Update padrão
     * 
     * @param   string      $config    Config da rota
     * @param   int         $id        Identificador do registro
     * @param   Request     $request   Dados da requisição
     * 
     * @return  Redirect               Edit
     */
    public function update(string $config, int $id, Request $request)
    {
        // Inicia config
        $this->getConfig($config);

        // Inicia controller
        $controller = $this->controller;
        $newObj = new $controller();

        // Valida requisição
        $validator = $this->makeValidation($request, $newObj->getRules());
        if ($validator) return back()->withInput()->withErrors($validator);
        
        // Atualiza registro
        $data = $newObj->updateData($request, $id);

        // Redireciona para edit
        return Redirect::route('admin.editar', ['id' => $id, 'config' => $config])
                        ->with('success', config('message.update'));
    }

    /**
     * Store padrão
     * 
     * @param   string      $config    Config da rota
     * @param   int         $id        Identificador do registro
     * 
     * @return  Redirect               Index
     */
    public function destroy(string $config, int $id)
    {
        // Inicia config
        $this->getConfig($config);

        // Inicia controller
        $controller = $this->controller;
        $newObj = new $controller();

        // Deleta registro
        $data = $newObj->destroyData($id);

        // Redireciona para index
        return Redirect::route('admin.listar', ['config' => $config])
                    ->with('success', config('message.delete'));
    }

    /**
     * Gera o caminho de pão das views
     * 
     * @param   string    $format       Formato do caminho de pão desejado
     * 
     * @return  object    $breadcrumbs  Caminho de pão desejado
     */
    public function getBreadcrumbs($format = null)
    {
        if(!isset($this->label)) return null;

        $breadcrumbs = (object) array(
            $this->label => (object) array(
                "label" => $this->config->label,
                "route" => $this->route,
                "active" => false
            ),
        );

        switch ($format) {
            case 'inserir':
                $breadcrumbs->Inserir = (object) array(
                    "label" => 'Inserir',
                    "route" => $this->route,
                    "active" => true
                );
                break;
            case 'editar':
                $breadcrumbs->Editar = (object) array(
                    "label" => 'Editar',
                    "route" => $this->route,
                    "active" => true
                );
                break;
            
            default:
                $breadcrumbs->{$this->label}->active = true;
                break;
        }

        return $breadcrumbs;
    }

    /**
     * Faz validação dos dados da requisição.
     * 
     * @param   object      $request        Dados da Requisição
     * @param   array      $request         Dados da Requisição
     * 
     * @return  mixed                       Retorno da validação com Validator
     */
    public function makeValidation(object $request, array $rules)
    {
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) return $validator;
        else return false;
    }
    
    /**
     * Busca config da controller
     * 
     * @param   string      $config     Config da rota
     * @return  object
     */
    public function getConfig(string $config): Void
    {
        $this->config = config($config);
        $this->label = $this->config->label;
        $this->route = $this->config->route;
        $this->model = config('app.model').'\\'.$this->config->model;
        $this->controller = config('app.controller').'\\'.$this->config->controller;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EquipeController extends Controller
{

    public function index()
    {
        $equipes = Equipe::lines()->select($this->config->index->thead)->get();
        
        return view('admin.default.index')
                ->with('data', $equipes)
                ->with('config', $this->config)
                ->with('thead', $this->config->index->thead)
                ->with('breadcrumbs', $this->getBreadcrumbs());
    }

    public function create()
    {
        return view('admin.default.create')
            ->with('config', $this->config)
            ->with('breadcrumbs', $this->getBreadcrumbs('inserir'));
    }

    public function store(Request $request)
    {
        $validator = $this->makeValidation($request);

        if ($validator) return back()->withInput()->withErrors($validator);
        
        $equipe = new Equipe();
        $equipe->nome = $request->nome;
        $equipe->save();

        return Redirect::route($this->route)
            ->with('success', config('message.insert'));
    }

    public function edit($id)
    {
        $equipe = Equipe::find($id);
        return view('admin.default.edit')
            ->with('data', $equipe)
            ->with('config', $this->config)
            ->with('breadcrumbs', $this->getBreadcrumbs('editar'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->makeValidation($request);

        if ($validator) return back()->withInput()->withErrors($validator);
        
        $equipe = Equipe::find($id);
        $equipe->nome = $request->nome;
        $equipe->save();

        return Redirect::route($this->edit, ['id' => $id])
                        ->with('success', config('message.update'));
    }

    public function destroy($id)
    {
        $equipe = Equipe::find($id);
        $equipe->delete();

        return Redirect::route($this->route)
                    ->with('success', config('message.delete'));
    }

    /**
     * Cria array de regras para validação
     * 
     * @return  array           Regras de validação
     */
    public function getRules()
    {
        return [
            'nome' => 'required'
        ];
    }
    
    /**
     * Busca config da controller
     * 
     * @return  object          Configurações da controller
     */
    public function getConfig()
    {
        return config('equipe');
    }
}

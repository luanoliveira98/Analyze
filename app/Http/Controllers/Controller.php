<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

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
                "label" => $this->label,
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
     * @param   Object      $request        Dados da Requisição
     * 
     * @return  Object                      Retorno da validação com Validator
     */
    public function makeValidation($request)
    {
        $validator = Validator::make($request->all(), $this->getRules());

        if($validator->fails()) return $validator;
        else return false;
    }
}

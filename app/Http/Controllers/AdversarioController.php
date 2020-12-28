<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
class AdversarioController extends Controller
{

    /**
     * Busca de registros para listagem
     * 
     * @return  object
     */
    public function data()
    {
        return Equipe::adversarios()->select($this->config->index->select)->get();
    }

    /**
     * Salva registro no BD
     * 
     * @param   object      $data       Registro a ser salvo
     * @param   object      $request    Dados da requisição
     * 
     * @return  object
     */
    public function saveData($data, $request)
    {
        $data->nome = $request->nome;
        $data->nivel = $request->nivel;
        $data->b_adversario = 1;
        return $data;
    }

    /**
     * Cria array de regras para validação
     * 
     * @return  array
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
     * @return  object
     */
    public function getConfig()
    {
        return config('adversario');
    }
}

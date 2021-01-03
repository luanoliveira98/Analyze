<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
class EquipeController extends Controller
{
    /**
     * Busca de registros para listagem
     * 
     * @param   array       $select         Campos a serem selecionados      
     * 
     * @return  object
     */
    public function data(array $select): object
    {
        return Equipe::lines()->select($select)->get();
    }

    /**
     * Salva registro no BD
     * 
     * @param   object      $request    Dados da requisição
     * 
     * @return  object
     */
    public function saveData(object $request): object
    {
        $data = $request->except('_token');
        return Equipe::insert($data);
    }

    /**
     * Busca de registros para edição
     * 
     * @param   int       $id           Identificador do registro   
     * 
     * @return  object
     */
    public function editData(int $id): object
    {
        return Equipe::find($id);
    }

    /**
     * Atualiza registro no BD
     * 
     * @param   object      $request    Dados da requisição
     * @param   int         $id         Identificador do registro
     * 
     * @return  bool
     */
    public function updateData(object $request, int $id): bool
    {
        $data = $request->except(['_token', '_method']);
        return Equipe::where('id', $id)->update($data);
    }

    /**
     * Deleta registro no BD
     * 
     * @param   int         $id         Identificador do registro
     * 
     * @return  bool
     */
    public function destroyData(int $id): bool
    {
        return Equipe::destroy($id);
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
}

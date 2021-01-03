<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use softDeletes;
    protected $table = 'usuarios';
    protected $fillable = ['nome', 'email', 'nick', 'senha'];

    public function scopeDiretoria($query)
    {
        return $query->whereHas('tags', function($q){
            $q->where('nivel', 'Diretoria');
        });
    }

    public function tags()
    {
        return $this->hasMany(UsuarioTag::class);
    }

    /**
     * Cria array de regras para validação
     * 
     * @param   string      $action         Ação da rota
     * @param   object      $request        Dados da requisição
     * 
     * @return  array
     */
    public static function getRules(string $action, object $request): array
    {
        $data = [
            'nome'  => 'required',
        ];

        if($action == 'store') {
            $data['senha'] = 'required|same:confirmar_senha';
            $data['email'] = 'required|email|unique:usuarios,email,NULL,id,deleted_at,NULL';
        } else if ($action == 'update') {
            $data['senha'] = 'same:confirmar_senha';
            $data['email'] = 'required|email|unique:usuarios,email,'.$request->id.',id,deleted_at,NULL';
        }

        return $data;
    }
}

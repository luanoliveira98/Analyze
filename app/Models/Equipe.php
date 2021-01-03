<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipe extends Model
{
    use softDeletes;
    protected $table = 'equipes';

    /**
     * Lista as line ups da organização
     */
    public function scopeLines($query)
    {
        return $query->where('b_adversario', 0);
    }

    /**
     * Lista os adversários
     */
    public function scopeAdversarios($query)
    {
        return $query->where('b_adversario', 1);
    }

    /**
     * Cria array de regras para validação
     * 
     * @return  array
     */
    public static function getRules(): array
    {
        return [
            'nome' => 'required'
        ];
    }
}

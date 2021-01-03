<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use softDeletes;
    protected $table = 'usuarios';

    public function scopeAdministracao($query)
    {
        return $query->where('nivel', 'administracao');
    }
}

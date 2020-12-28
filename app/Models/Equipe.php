<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipe extends Model
{
    use softDeletes;
    protected $table = 'equipes';

    public function scopeLines($query)
    {
        return $query->where('b_adversario', 0);
    }
}

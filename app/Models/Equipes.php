<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipes extends Model
{
    use softDeletes;
    protected $table = 'usuarios';
}

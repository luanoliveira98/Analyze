<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioTag extends Model
{
    use softDeletes;
    protected $table = 'usuario_tags';
    protected $fillable = ['usuario_id', 'nivel', 'posicao'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioAutenticacao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'usuario_autenticacao';

    protected $fillable = [
        'id_usuario',
        'token',
        'expira',
    ];
}

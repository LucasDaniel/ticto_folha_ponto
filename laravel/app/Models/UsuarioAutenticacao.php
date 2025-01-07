<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioAutenticacao extends Model
{
    use HasFactory;

    protected $table = 'usuario_autenticacao';

    protected $fillable = [
        'id_usuario',
        'token',
        'expira',
    ];
}

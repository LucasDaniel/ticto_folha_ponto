<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FolhaPonto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'folha_ponto';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'cargo',
        'data_nascimento',
        'cep',
        'endereco_completo',
    ];
}

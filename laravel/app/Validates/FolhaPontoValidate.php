<?php

namespace App\Validates;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class FolhaPontoValidate extends BaseValidate {

    public function validate(Request $request) {

        $request->validate([
            'cpf' => 'required|string|min:11|max:11',
            'email' => 'required|email',
            'senha' => 'required|string',
            'cargo' => 'required|string',
            'data_nascimento' => 'required|string',
            'cep' => 'required|string',
            'endereco_completo' => 'required|string',
        ]);
        
    }
}



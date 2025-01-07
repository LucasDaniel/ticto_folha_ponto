<?php

namespace App\Validates;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserValidate extends BaseValidate {

    public function validate(Request $request) {

        $request->validate([
            'nivel' => 'required|string',
            'nome' => 'required|string',
            'email' => 'required|email|unique:users',
            'senha' => 'required|string',
        ]);
        
    }
}



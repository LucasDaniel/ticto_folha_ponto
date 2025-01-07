<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Validates\UserValidate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct() {
        $this->service = new UserService();
        $this->validate = new UserValidate();
    }

    public function create(Request $request) {
        $this->validate->validate($request);
        $request->merge([
            'senha' => Hash::make($request->get('senha')),
        ]);
        return $this->service->create($request);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Services\UserService;

class TictoController extends Controller
{
    public function home(Request $request) {
        $loginService = new LoginService();

        $email = $request->get('email');
        $senha = $request->get('senha');

        $user = $loginService->login($email, $senha);

        if (!$user) return view('login');

        return view('home',['nivel'=>$user['nivel']]);
    }

    public function userList(Request $request) {
        $userService = new UserService();

        $users = $userService->listAllFuncionarios();

        return view('list-funcionarios',['users'=>$users]);
    }
}

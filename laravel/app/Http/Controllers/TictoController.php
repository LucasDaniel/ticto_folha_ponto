<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Services\UserService;
use App\Http\Controllers\UserController;

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

    public function userCreate(Request $request) {
        return view('create-funcionario');
    }

    public function userCreatePost(Request $request) {
        $userController = new UserController();
        $userCreate = $userController->createNewUser($request);
        dd($userCreate);
        return view('create-funcionario',['userCreate' => $userCreate]);
    }
    
    public function aaa(Request $request) {
        $userController = new UserController();
        $userCreate = $userController->createNewUser($request);
        dd($userCreate);
        return view('create-funcionario',['userCreate' => $userCreate]);
    }
}

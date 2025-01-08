<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginService extends BaseService
{
    /**
     * Constructor, set model and repository
     */
    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function login(string $email, string $senha) {
        $user = $this->userRepository->login($email,$senha);
        if (!$user || !Hash::check($senha, $user->senha)) return null;
        return $user;
    }

}

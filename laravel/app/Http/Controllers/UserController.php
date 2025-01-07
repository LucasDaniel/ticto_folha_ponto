<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Validates\UserValidate;

class UserController extends Controller
{
    public function __construct() {
        $this->service = new UserService();
        $this->validate = new UserValidate();
    }
}

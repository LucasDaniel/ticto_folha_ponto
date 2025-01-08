<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new User();
	}	
	
	public function listAllFuncionarios() {
		return $this->model::where('nivel','funcionario')->get();
	}

	public function login(string $email,string $senha) {
		return $this->model::where('email',$email)->first();
	}
}
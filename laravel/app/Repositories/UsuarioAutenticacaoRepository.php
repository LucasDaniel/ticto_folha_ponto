<?php

namespace App\Repositories;

use App\Models\UsuarioAutenticacao;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsuarioAutenticacaoRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new UsuarioAutenticacao();
	}	

    public function createUsuarioAutenticacao($user) {
        UsuarioAutenticacao::factory()->create([
            'id_usuario' => $user->id,
            'token' => Hash::make($user->nome),
            'expira' => Carbon::now()->addMinutes(10)->format("Y-m-d H:i:s")
        ]);
    }

    public function deleteByUserId(int $id) {
        return $this->model::where('id_usuario',$id)->delete();
    }
}
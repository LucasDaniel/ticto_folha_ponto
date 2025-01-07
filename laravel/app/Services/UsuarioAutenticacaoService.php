<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\UsuarioAutenticacaoRepository;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuarioAutenticacaoService extends BaseService
{
    /**
     * Constructor, set model and repository
     */
    public function __construct() {
        $this->repository = new UsuarioAutenticacaoRepository();
    }

    public function deleteByUserId(int $id) {
        return $this->repository->deleteByUserId($id);
    }

    public function createUsuarioAutenticacao(User $user) {
        return $this->repository->createUsuarioAutenticacao($user);
    }
}

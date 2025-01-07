<?php

namespace App\Services;

use App\Models\UsuarioAutenticacao;
use App\Services\UsuarioAutenticacaoService;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserService extends BaseService
{
    /**
     * Constructor, set model and repository
     */
    public function __construct() {
        $this->repository = new UserRepository();
    }

    public function createNewUser(Request $request) {
        $user = $this->repository->create($request->all());
        $usuarioAutenticacaoService = new UsuarioAutenticacaoService();
        return $usuarioAutenticacaoService->createUsuarioAutenticacao($user);
        return $user;
    }

    public function deleteUserAndUsuarioAutenticacao(int $id) {
        $this->repository->delete($id);
        $usuarioAutenticacaoService = new UsuarioAutenticacaoService();
        $usuarioAutenticacaoService->deleteByUserId($id);
        return true;
    }

}

<?php

namespace App\Services;

use App\Repositories\FolhaPontoRepository;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FolhaPontoService extends BaseService
{
    /**
     * Constructor, set model and repository
     */
    public function __construct() {
        $this->repository = new FolhaPontoRepository();
    }

    public function createNewFolhaPonto(Request $request) {
        return $this->repository->create($request->all());
    }

}

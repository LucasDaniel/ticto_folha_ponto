<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FolhaPontoService;
use App\Validates\FolhaPontoValidate;
use Illuminate\Support\Facades\Hash;

class FolhaPontoController extends Controller
{
    public function __construct() {
        $this->service = new FolhaPontoService();
        $this->validate = new FolhaPontoValidate();
    }

    public function listByDate(Request $request) {
        return $this->service->listByDate($request);
    }

    public function createNewFolhaPonto(Request $request) {
        $this->validate->validate($request);
        $request->merge([
            'senha' => Hash::make($request->get('senha')),
        ]);
        return $this->service->createNewFolhaPonto($request);
    }
}

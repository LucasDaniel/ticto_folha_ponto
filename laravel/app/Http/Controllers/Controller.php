<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Dictionary\Dictionary;
use App\Exceptions\GetUserException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, Dictionary;

    /**
     * Controller variables
     */
    protected $return;
    protected $model;
    protected $repository;
    protected $service;
    protected $validate;

    /**
     * List all datas of repositrory
     */
    public function list() {
        return $this->service->list();
    }

    /**
     * Get the data of repository by id
     * @param int
     */
    public function show(int $id) {
        return $this->service->show($id);
    }

    public function delete($id) {
        return $this->service->delete($id);
    }

    public function update(Request $request, int $id) {
        return $this->service->update($request,$id);
    }

    public function create(Request $request) {
        $this->validate->validate($request);
        return $this->service->create($request);
    }
}

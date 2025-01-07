<?php

namespace App\Services;

use Illuminate\Http\Request;

class BaseService
{
    protected $repository;

    public function list() {
        return $this->repository->all();
    }

    public function show(int $id) {
        return $this->repository->find($id);
    }

    public function create(Request $request) {
        return $this->repository->create($request->all());
    }

    public function update(Request $request, int $id) {
        return $this->repository->update($request,$id);
    }

    public function delete(int $id) {
        return $this->repository->delete($id);
    }
}

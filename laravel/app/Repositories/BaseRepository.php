<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\GetModelException;
use Illuminate\Http\Request;

class BaseRepository
{
    protected $model;

    /**
     * Get all datas of model
     * @return Collection
     */
    public function all(): Collection {
        return $this->model::all();
    }

    /**
     * Find the data of id model
     * @return Model
     */
    public function find(int $id): Model|null {
        $find = $this->model::find($id);
        return !$find ? throw new GetUserException() : $find;
    }

    public function create(array $args): Model {
        return $this->model::create($args);
    }

    public function update(Request $request, int $id) {
        $model = $this->model::find($id);
        if (!$model) throw new GetModelException();
        $input = $request->all();
        $model->fill($input)->save();
        return $model;
    }

    public function delete(int $id) {
        $model = $this->model::find($id);
        if (!$model) throw new GetModelException();
        return $model->delete();
    }
}
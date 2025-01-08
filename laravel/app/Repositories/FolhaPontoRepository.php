<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\FolhaPonto;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class FolhaPontoRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new FolhaPonto();
	}	

	public function listByDate($request) {
		$data_inicio = !$request['data_inicio'] ? "1979-01-01 00:00:00" : $request['data_inicio'];
		$data_fim = !$request['data_fim'] ? Carbon::now()->format("Y-m-d H:i:s") : $request['data_fim'];
		return $this->model::whereBetween('created_at',[$data_inicio,$data_fim])->get();
    }
}
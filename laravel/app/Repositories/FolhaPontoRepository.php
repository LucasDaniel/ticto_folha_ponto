<?php

namespace App\Repositories;

use App\Models\FolhaPonto;
use Illuminate\Support\Facades\Hash;

class FolhaPontoRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new FolhaPonto();
	}	
}
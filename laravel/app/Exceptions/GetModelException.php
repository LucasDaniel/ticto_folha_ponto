<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
 
class GetModelException extends BaseException
{
    public function render(Request $request): JsonResponse
    {
        $error = 'getModel';
        return $this->baseRenderer($error);
    }
}

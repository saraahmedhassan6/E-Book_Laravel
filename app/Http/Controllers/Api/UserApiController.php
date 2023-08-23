<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\Traits\ApiTraitResponse;
use App\Models\User;

class UserApiController extends Controller
{
    use ApiTraitResponse;
    public function index()
    {
        $User=User::all();
        if($User)
        {
            return $this->ApiResponse($User, 'ok', Response::HTTP_OK);
        }

        return $this->ApiResponse(null, 'Not Found', Response::HTTP_NOT_FOUND);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\Traits\ApiTraitResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ProfileApiController extends Controller
{
    use ApiTraitResponse;
    public function index()
    {
        $Profiles=Auth::user();
        if($Profiles)
        {
            return $this->ApiResponse($Profiles, 'ok', Response::HTTP_OK);
        }

        return $this->ApiResponse(null, 'Not Found', Response::HTTP_NOT_FOUND);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $instance=User::findOrFail($id);
        if(!$instance){
            return $this->ApiResponse(null, 'Not Found', Response::HTTP_NOT_FOUND);
        }
        $instance->update($request->all());

        if($instance){
            return $this->ApiResponse($instance,'Profile has been Updated successfully',Response::HTTP_ACCEPTED);
        }

    }
    
}

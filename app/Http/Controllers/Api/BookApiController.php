<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\Traits\ApiTraitResponse;
use App\Models\Book;

class BookApiController extends Controller
{
    use ApiTraitResponse;
    public function index()
    {
        $Book=Book::all();
        if($Book)
        {
            return $this->ApiResponse($Book, 'ok', Response::HTTP_OK);
        }

        return $this->ApiResponse(null, 'Not Found', Response::HTTP_NOT_FOUND);
    }

    public function show($id)
    {
        $Book=Book::find($id);
        if($Book)
        {
            return $this->ApiResponse($Book, 'ok', Response::HTTP_OK);
        }

        return $this->ApiResponse(null, 'Not Found', Response::HTTP_NOT_FOUND);
    }

    public function store(Request $request){

    
        $Book = Book::create($request->all());
        $Book->save();

        if($Book){
            return $this->ApiResponse($Book,'Book has been added successfully ',Response::HTTP_ACCEPTED);
        }

        return $this->ApiResponse(null,'The Book Not Save',Response::HTTP_BAD_REQUEST);
    }
    public function update(Request $request ,$id){

        $Book=Book::find($id);

        if(!$Book){
            return $this->ApiResponse(null, 'Not Found', Response::HTTP_NOT_FOUND);
        }

        $Book->update($request->all());

        if($Book){
            return $this->ApiResponse($Book,'Book has been Updated successfully',Response::HTTP_ACCEPTED);
        }

    }

    public function destroy($id){

        $Book=Book::find($id);

        if(!$Book)
        {
            return $this->ApiResponse(null, 'Not Found', Response::HTTP_NOT_FOUND);
        }

        $Book->delete($id);

        if($Book){
            return $this->ApiResponse(null,'Book has been Deleted successfully',Response::HTTP_ACCEPTED);
        }

    }

    
}

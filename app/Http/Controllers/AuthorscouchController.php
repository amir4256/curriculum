<?php

namespace App\Http\Controllers;

use App\Models\Authorscouch;
use App\Repositories\AuthorschouchRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthorscouchController extends Controller
{
    public function __construct(AuthorschouchRepositoryInterface $authorscouchRepository)
    {
        $this->authorscouch = $authorscouchRepository;
    }

    public function create(Request $request){

        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'subject_id' => 'required',
            'role' => 'required'

        ];

        $validator = Validator::make($request->toArray(), $rules);

        if ($validator->passes()) {

            $this->authorscouch->create($request);
            return response()->json('successful',200);
        } else {

            return response()->json($validator->errors()->all(),500);
        }
    }

}

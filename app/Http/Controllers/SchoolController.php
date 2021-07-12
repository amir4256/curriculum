<?php

namespace App\Http\Controllers;

use App\Repositories\SchoolRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{

    public function __construct(SchoolRepositoryInterface $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    public function update(Request $request){

        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',

        ];

        $validator = Validator::make($request->toArray(), $rules);

        if ($validator->passes()) {

            $this->schoolRepository->update($request);
            return response()->json('successful',200);
        } else {

            return response()->json($validator->errors()->all(),500);
        }
    }
}

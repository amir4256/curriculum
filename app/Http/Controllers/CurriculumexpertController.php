<?php

namespace App\Http\Controllers;

use App\Models\Curriculumexpert;
use App\Repositories\CurriculumexpertRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class CurriculumexpertController extends Controller
{
    public function __construct(CurriculumexpertRepositoryInterface $curriculumexpertRepository)
    {
        $this->curriculumexpertRepository = $curriculumexpertRepository;
    }

    public function create(Request $request){

        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',

        ];

        $validator = Validator::make($request->toArray(), $rules);

        if ($validator->passes()) {

            $this->curriculumexpertRepository->create($request);
            return response()->json('successful',200);
        } else {

            return response()->json($validator->errors()->all(),500);
        }
    }
}

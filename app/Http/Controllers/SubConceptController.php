<?php

namespace App\Http\Controllers;

use App\Models\SubConcept;
use App\Repositories\SubConceptRepositoryInterface;
use App\Repositories\TargetConceptRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubConceptController extends Controller
{

    /*public function a(){
        $a = SubConcept::where('id' , '2')->with('target_concept')->get();
        dd($a);
    }*/

    public function __construct(SubConceptRepositoryInterface $subConceptRepository)
    {
        $this->subConceptRepository = $subConceptRepository;
    }

    public function create(Request $request){

        $rules = [
            'name' => 'required',
            'created_by' => 'required',
            'user_id' => 'required'
        ];

        $validator = Validator::make($request->toArray(), $rules);

        if ($validator->passes()) {
            $this->subConceptRepository->create($request);
            return response()->json('successful',200);


        } else {

            return response()->json($validator->errors()->all(),500);
        }

    }
}

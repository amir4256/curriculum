<?php

namespace App\Http\Controllers;

use App\Models\Comprehensivetask;
use App\Repositories\ComprehensivetaskRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComprehensiveTaskController extends Controller
{
    /**
     * @var ComprehensivetaskRepositoryInterface
     */
    private $comprehensivetaskRepository;

    public function __construct(ComprehensivetaskRepositoryInterface $comprehensivetaskRepository)
    {
        $this->comprehensivetaskRepository = $comprehensivetaskRepository;
    }

    public function create(Request $request)
    {



        $rules = [
            'title' => 'required',
            'subject_id' => 'required',
            'description' => 'required',
            'critarias' => 'required',
            'keyquestions' => 'required',
            'tips' => 'required'
        ];


        $validator = Validator::make($request->toArray(), $rules);

        if ($validator->passes())
        {
            $this->comprehensivetaskRepository->create($request);
            return response()->json('created successfully',200);
        } else {

            return response()->json($validator->errors()->all(),500);
        }
    }

    public function getById(Request $request)
    {
        $id = $request->id;
        $comprehensivetask = $this->comprehensivetaskRepository->getByIdRelation($id);
        return response()->json($comprehensivetask,200);
    }

    public function getAll(){
        $comprehensivetask = $this->comprehensivetaskRepository->getAll();
        return response()->json($comprehensivetask,200);
    }

    public function update(Request $request){

        $this->comprehensivetaskRepository->update($request);
        return response()->json('successful',200);
    }

    public function delete(Request $request){

        $id = $request->id;
        $this->comprehensivetaskRepository->delete($id);
        return response()->json('successful',200);
    }
}

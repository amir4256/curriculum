<?php

namespace App\Repositories;

use App\Models\SubConcept;
use App\Models\TargetConcept;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubConceptRepository implements SubConceptRepositoryInterface
{


    public function all()
    {
        return SubConcept::orderBy('created_at', 'desc')
            ->get();
    }

    public function getByTargetConceptId($id){

        return SubConcept::with('target_concept')->where('target_concept_id' , $id)->get();

    }

    public function create($request){

        $subConcept = new SubConcept();
        $subConcept->name = $request->name;
        $subConcept->created_by = $request->created_by;
        $subConcept->user_id = $request->user_id;
        $subConcept->save();
        $target_concept_id = $request->target_concept_id;
        $target_concept = TargetConcept::where('id', $target_concept_id)->firstOrFail();
        $target_concept->subConcepts()->attach($subConcept);

        return response()->json('successful',200);
    }
}

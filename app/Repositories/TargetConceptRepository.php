<?php

namespace App\Repositories;

use App\Models\TargetConcept;

class TargetConceptRepository implements TargetConceptRepositoryInterface
{

    public function getAll()
    {
        $result = [];
        $targetconcepts = TargetConcept::all();
        foreach ($targetconcepts as $targetconcept) {
            $result[] = $targetconcept
                ->with('subConcepts')
                ->with('themes')
                ->with('results')
                ->get();
        }
        return $result;
    }

    public function getByIdRelation($id)
    {
        return TargetConcept::where('id' , $id)
            ->with('subConcepts')
            ->with('themes')
            ->with('results')
            ->firstOrFail();
    }

    public function getById($id)
    {
        return TargetConcept::where('id' , $id)->firsOrFail();
    }

    public function filter($request)
    {
       //
    }

    public function getResults($id)
    {
        // TODO: Implement getResults() method.
    }

    public function getThemes($id)
    {
        // TODO: Implement getThemes() method.
    }

    public function getSubConcept($id)
    {
        // TODO: Implement getSubConcept() method.
    }

    public function getBySubjectIdAndGrades($id , $grades)
    {
        $bySubjectId = TargetConcept::where('subject_id' , $id)->with('grades')->get();

        $res = [];
        foreach ($bySubjectId as $item){
            foreach ($item->grades as $grade){
                if (in_array($grade->id , $grades)){
                    $res[] = $item;
                    break;
                }
            }
        }

        return $res;
    }
}


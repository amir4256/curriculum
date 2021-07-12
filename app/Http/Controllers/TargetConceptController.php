<?php

namespace App\Http\Controllers;

use App\Models\TargetConcept;
use App\Repositories\SubConceptRepositoryInterface;
use App\Repositories\TargetConceptRepositoryInterface;
use Illuminate\Http\Request;

class TargetConceptController extends Controller
{
    /**
     * @var TargetConceptRepositoryInterface
     */
    private $targetConceptRepository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(TargetConceptRepositoryInterface $targetConceptRepository)
    {
        $this->targetConceptRepository = $targetConceptRepository;
    }

    public function index()
    {
        $target = $this->targetConceptRepository->getAll();
        return response()->json($target,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getById(Request $request)
    {
        $id = $request->id;
        $target = $this->targetConceptRepository->getByIdRelation($id);
        return response()->json($target,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TargetConcept  $targetConcept
     * @return \Illuminate\Http\Response
     */

    public function filter(Request $request)
    {
        $this->targetConceptRepository->filter($request);
        return response()->json("successful",200);
    }

    public function show(TargetConcept $targetConcept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TargetConcept  $targetConcept
     * @return \Illuminate\Http\Response
     */
    public function edit(TargetConcept $targetConcept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TargetConcept  $targetConcept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TargetConcept $targetConcept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TargetConcept  $targetConcept
     * @return \Illuminate\Http\Response
     */
    public function destroy(TargetConcept $targetConcept)
    {
        //
    }

    public function getTargetConcepts(Request $request)
    {
        $subjectId = $request->post('subject_id');
        $grades = $request->grade;

        return $this->targetConceptRepository->getBySubjectIdAndGrades($subjectId , $grades);
    }

    public function getTargetConceptData(Request $request)
    {
        $targetConcept = $request->post('target_concept_id');

        return $this->targetConceptRepository->getByIdRelation($targetConcept);
    }
}

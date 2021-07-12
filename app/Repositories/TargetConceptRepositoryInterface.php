<?php

namespace App\Repositories;

interface TargetConceptRepositoryInterface {
    public function getByIdRelation($id);
    public function getById($id);
    public function getAll();
    public function filter($request);
    public function getResults($id);
    public function getThemes($id);
    public function getSubConcept($id);
    public function getBySubjectIdAndGrades($id , $grades);
}

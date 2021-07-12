<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TargetConcept extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name' , 'subject_id'];

    public function subConcepts()
    {
        return $this->belongsToMany(SubConcept::class);
    }

    public function themes(){
        return $this->belongsToMany(Theme::class);
    }

    public function grades(){
        return $this->belongsToMany(Grade::class , 'target_concept_grade');
    }

    public function subjects(){
        return $this->belongsTo(Subject::class);
    }

    public function results(){
        return $this->belongsToMany(Result::class);
    }

    public function comprehensivetasks(){
        return $this->belongsToMany(Comprehensivetask::class);
    }
}

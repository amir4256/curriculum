<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name'
    ];

    public function comprehensivetasks(){
        return $this->belongsToMany(Comprehensivetask::class, 'comprehensivetask_grade', 'grade_id', 'comprehensivetask_id')->withPivot('id')->withTimestamps();
    }

    public function targetConcepts(){
        return $this->belongsToMany(TargetConcept::class , 'target_concept_grade');
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}

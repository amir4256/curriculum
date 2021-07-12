<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['abbreviation' , 'description' , 'grade_id' , 'subject_id'];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function targetConcepts(){
        return $this->belongsToMany(TargetConcept::class);
    }

    public function comprehensivetasks(){
        return $this->belongsToMany(Comprehensivetask::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubConcept extends Model
{
    use HasFactory;
    use SoftDeletes;
    //TODO: RELATION OF SUB CONCEPT AND TARGET CONCEPT IS ONE TO MANY AND IT MUST BE CHANGED
    protected $fillable=['name' , 'created_by' , 'user_id', 'target_concept_id'];

    public function targetConcepts()
    {
        return $this->belongsToMany(TargetConcept::class );
    }

    public function comprehensivetasks()
    {
        return $this->belongsToMany(Comprehensivetask::class );
    }
}

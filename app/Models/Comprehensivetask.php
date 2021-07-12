<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprehensivetask extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'subject_id',
        'description',
        'critarias',
        'keyquestions',
        'tips',
        'created_by',
        'user_id'
    ];

    public function grades(){
        return $this->belongsToMany(Grade::class, 'comprehensivetask_grade', 'comprehensivetask_id', 'grade_id')->withPivot('id')->withTimestamps();
    }

    public function targetConcepts()
    {
        return $this->belongsToMany(TargetConcept::class);
    }

    public function subConcepts()
    {
        return $this->belongsToMany(SubConcept::class);
    }

    public function themes()
    {
        return $this->belongsToMany(Theme::class);
    }

    public function results()
    {
        return $this->belongsToMany(Result::class);
    }

    public function taskFiles()
    {
        return $this->HasMany(Taskfile::class, 'comprehensivetask_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}

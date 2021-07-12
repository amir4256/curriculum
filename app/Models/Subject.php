<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name'];

    public function targetConcepts(){
        return $this->hasMany(TargetConcept::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }

    public function authorscouches(){
        return $this->hasMany(Authorscouch::class);
    }

    public function comprehensivetasks(){
        return $this->hasMany(Comprehensivetask::class);
    }
}

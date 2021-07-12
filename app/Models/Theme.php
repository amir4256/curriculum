<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theme extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name' , 'created_by' , 'user_id'];

    public function targetConcepts(){
        return $this->belongsToMany(TargetConcept::class);
    }

    public function comprehensivetasks(){
        return $this->belongsToMany(Comprehensivetask::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function schools(){
        return $this->hasMany(School::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'city_id',
    ];

    public function managers()
    {
        return $this->hasMany(SchoolManager::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}

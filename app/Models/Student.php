<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
          'firstname',
          'lastname',
          'email',
          'phone',
          'password',
          'city_id',
          'grade_id',
          'school_id'
    ];

    public function comprehensivetasks()
    {
        return $this->belongsToMany(Comprehensivetask::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}

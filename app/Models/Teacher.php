<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
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
        'school_id'
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function school(){
        return $this->belongsTo(School::class);
    }
}

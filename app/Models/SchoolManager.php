<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolManager extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['firstname', 'lastname', 'email', 'password', 'school_id'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubTheme extends Model
{
    //TODO: THIS MODEL ADN CONTROLLER AND REPOSITORY AND MIGRATION MUST BE DELETED
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'created_by',
        'user_id'
    ];

    public function comprehensivetasks(){
        return $this->belongsToMany(Comprehensivetask::class);
    }
}

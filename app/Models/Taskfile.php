<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taskfile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'comprehensivetask_files';
    protected $fillable = [
        'name',
        'path',
        'file_type',
        'link',
        'text',
        'comprehensivetask_id'
    ];

    public function comprehensivetasks()
    {
        return $this->belongsToMany(Comprehensivetask::class);
    }

}

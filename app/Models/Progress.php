<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'task',
        'description',
        'timestamp',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

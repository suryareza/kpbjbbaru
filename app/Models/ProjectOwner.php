<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_code', 'project_name', 'project_owner', 'description', 'category'];

    public function owner()
    {
        return $this->belongsTo(ProjectOwner::class, 'project_owner');
    }
}

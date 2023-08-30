<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_code', 'project_name', 'project_owner_id', 'lead_subgroup_id', 'secondary_subgroup_id',
        'description', 'category', 'priority', 'pic_id', 'secondary_pic_id',
        'target_date', 'target_month', 'target_revisions', 'status',
    ];

    public function projectOwner()
    {
        return $this->belongsTo(ProjectOwner::class, 'project_owner_id');
    }

    public function leadSubgroup()
    {
        return $this->belongsTo(ProjectOwner::class, 'lead_subgroup_id');
    }

    public function secondarySubgroup()
    {
        return $this->belongsTo(ProjectOwner::class, 'secondary_subgroup_id');
    }

    public function pic()
    {
        return $this->belongsTo(User::class, 'pic_id');
    }

    public function secondaryPic()
    {
        return $this->belongsTo(User::class, 'secondary_pic_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Task extends Model
{
    public $table = "progress";
    use HasFactory;

    protected $fillable = [
        'project_id',
        'task',
        'description',
        'timestamp',
        // Add other columns here
    ];

    // Define relationships if needed
    // Example:
    /*
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    */
}

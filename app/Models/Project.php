<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects'; // Menyebutkan nama tabel yang sesuai

    protected $fillable = [
        'project_code',
        'project_name',
        'project_owner',
        'description',
        'category',
    ];

    // Tambahkan metode lain yang mungkin Anda perlukan

}

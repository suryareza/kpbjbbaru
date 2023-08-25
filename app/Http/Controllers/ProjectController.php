<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($projectId)
    {
        $project = Project::find($projectId);
        $owner = $project->owner;
        return view('project', compact('project')); 

        // Lakukan apa yang Anda inginkan dengan $project dan $owner
        // Contoh: kirimkan data ke view atau lakukan operasi lainnya
    }
}

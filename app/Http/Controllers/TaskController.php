<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function showList()
    {
        $tasks = Task::paginate(10); // Assuming you want pagination
        return view('projects.task', ['tasks' => $tasks]);
    }


    public function show($taskId)
    {
        $tasks = Task::find($taskId);
        $owner = $tasks->owner;
        return view('projects.task', compact('tasks')); 

        // Lakukan apa yang Anda inginkan dengan $project dan $owner
        // Contoh: kirimkan data ke view atau lakukan operasi lainnya
    }
}


    // Implement other methods like create, store, edit, update, delet

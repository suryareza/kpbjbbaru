<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress; // Pastikan Anda telah mengimpor model Progress
use App\Models\Project; // Juga pastikan Anda telah mengimpor model Project

class ProgressController extends Controller
{
    public function index()
    {
        $progressList = Progress::all();
        return view('progress.index', compact('progressList'));
    }

    public function create()
    {
        $projects = Project::all();
        return view('progress.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'task' => 'required',
            'description' => 'required',
            'timestamp' => 'required|date',
        ]);

        Progress::create($request->all());

        return redirect()->route('progress.index')->with('success', 'Progress added successfully');
    }

    // Metode lain seperti edit, update, dan delete

}


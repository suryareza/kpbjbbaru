<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    // Metode untuk pencarian
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $projects = Project::where('project_name', 'LIKE', '%' . $keyword . '%')->get();
        return view('projects.index', compact('projects'));
    }

    // Metode untuk menampilkan halaman tambah data
    public function showAddForm()
    {
        return view('projects.add');
    }

    // Metode untuk menyimpan data baru
    public function store(Request $request)
    {
        // Lakukan validasi input di sini
        // ...
        
        $project = new Project();
        $project->project_code = $request->input('project_code');
        $project->project_name = $request->input('project_name');
        $project->project_owner = $request->input('project_owner');
        $project->description = $request->input('description');
        $project->category = $request->input('category');
        $project->save();

        return redirect('/projects')->with('sukses', 'Data project berhasil ditambahkan.');
    }

    public function showList(){
        $projects = Project::paginate(10);
        return view('pages.list', compact('projects'));
    }

    // Metode untuk menampilkan halaman edit data
    public function showEditForm($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }
    
    public function create()
    {
        return view('pages.add');
    }
    // Metode untuk mengupdate data
    public function update(Request $request, $id)
    {
        // Lakukan validasi input di sini
        // ...
        
        $project = Project::find($id);
        $project->project_code = $request->input('project_code');
        $project->project_name = $request->input('project_name');
        $project->project_owner = $request->input('project_owner');
        $project->description = $request->input('description');
        $project->category = $request->input('category');
        $project->save();

        return redirect('/projects')->with('update', 'Data project berhasil diperbarui.');
    }

    // Metode untuk menghapus data
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $project = Project::find($id);
        $project->delete();

        return redirect('/projects')->with('hapus', 'Data project berhasil dihapus.');
    }
}

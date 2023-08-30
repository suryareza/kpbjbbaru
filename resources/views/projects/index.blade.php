@php
    $activePage = 'index';
    $namePage = 'index';
@endphp
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Projects</h2>
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Create Project</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->project_code }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

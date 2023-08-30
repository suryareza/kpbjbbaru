@php
    $activePage = 'create';
    $namePage = 'create';
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Project</h2>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="project_code">Project Code:</label>
                <input type="text" name="project_code" class="form-control">
            </div>
            <div class="form-group">
                <label for="project_name">Project Name:</label>
                <input type="text" name="project_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="project_owner_id">Project Owner:</label>
                <select name="project_owner_id" class="form-control">
                    @foreach ($projectOwners as $owner)
                        <option value="{{ $owner->id }}">{{ $owner->id . ' - ' . $owner->divisi . ' - ' . $owner->group . ' - ' . $owner->subgroup }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="lead_subgroup_id">Lead Subgroup:</label>
                <select name="lead_subgroup_id" class="form-control">
                    @foreach ($projectOwners as $owner)
                        <option value="{{ $owner->id }}">{{ $owner->subgroup }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Add more form fields for other project attributes -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="target_date">Target Date:</label>
                <input type="date" name="target_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="target_revisions">Target Revisions:</label>
                <select name="target_revisions" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="asal_project" required id="asal_project">
                    <option value="1"> Todo </option>
                    <option value="2"> On Progress </option>  
                    <option value="3"> Testing</option>
                    <option value="4"> Waiting Deploy</option>
                    <option value="5"> Done</option>
                    <option value="6"> Cancel</option>
                    <option value="7"> Pending</option>
                    <option value="8"> inisiasi</option>
                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                </select>
                
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

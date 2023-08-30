@extends('layouts.app', [
    'namePage' => 'Task',
    'class' => 'sidebar-mini',
    'activePage' => 'task',
])

@section('content')
<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Task Data</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="/cari_list">
                        @csrf
                        <div class="input-group">
                            <input type="text" placeholder="Cari Nama Task" required class="form-control form-control-sm"
                                name="keyword">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                            </div>
                        </div>
                    </form> 
                    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

                    <div class="table-responsive">
                        <!-- ... your table content ... -->
                    </div>
              
                    <div class="table-responsive">
                        @if(session('sukses'))
                        <div class="alert alert-success my-4">
                            {{session('sukses')}}
                        </div>
                        @endif

                        @if(session('hapus'))
                        <div class="alert alert-warning my-4">
                            {{session('hapus')}}
                        </div>
                        @endif

                        @if(session('update'))
                        <div class="alert alert-info my-4">
                            {{session('update')}}
                        </div>
                        @endif

                        <table class="table table-striped">
                            <thead class="text-primary">
                                <tr>
                                    <th>Id</th>
                                    <th>Project Id</th>
                                    <th>Task</th>
                                    <th>Description</th>
                                    <th>Timestamp</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = ($tasks->currentPage() - 1) * $tasks->perPage() + 1; @endphp
                                @foreach($tasks as $task)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$task->project_id}}</td>
                                    <td>{{$task->task}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->timestamp}}</td>
                                    <td>{{$task->created_at}}</td>
                                    <td>{{$task->updated_at}}</td>
                                    <td>
                                        <a href="/edit_list/{{$task->id}}" class="btn btn-link btn-info btn-icon btn-sm">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </a>
                                        <!-- Form hapus belum memiliki aksi yang sesuai -->
                                        <form class="d-inline" method="post" action="#">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$task->id}}">
                                            <button type="submit" class="btn btn-link btn-danger btn-icon btn-sm">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-3"></div>
                    {{$tasks->links()}} <!-- Use $tasks instead of $task -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

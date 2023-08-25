@extends('layouts.app', [
    'namePage' => 'List',
    'class' => 'sidebar-mini',
    'activePage' => 'list',
])

@section('content')

<div class="container-fluid mg-t-20">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <h4 class="content-title mb-1">List Data</h4>
            <nav aria-label="breadcrumb">
            </nav>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/cari_list">
                        @csrf
                        <div class="input-group mb-4">
                            <input type="text" placeholder="Cari Nama Project..." required class="form-control"
                                name="keyword">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                    <a href="/tambah_list" class="btn btn-success mb-3">Tambah</a>
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

                        <table class="table table-striped mg-b-0 text-md-nowrap border">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>project Code</th>
                                    <th>Project Name</th>
                                    <th>Project Owner</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = ($projects->currentPage() - 1) * $projects->perPage() + 1; @endphp
                                @foreach($projects as $list)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$list->project_code}}</td>
                                    <td>{{$list->project_name}}</td>
                                    <td>{{$list->project_owner}}</td>
                                    <td>{{$list->description}}</td>
                                    <td>{{$list->category}}</td>
                                    <td>{{$list->created_at}}</td>
                                    <td>{{$list->updated_at}}</td>
                                    <td>
                                        <a href="/edit_list/{{$list->id}}"><i
                                                class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                                        <!-- Form hapus belum memiliki aksi yang sesuai -->
                                        <form class="d-inline" method="post" action="#">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$list->id}}">
                                            <button type="submit" class="btn"><i
                                                    class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-3"></div>
                    {{$projects->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

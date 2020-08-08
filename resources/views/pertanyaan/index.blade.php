@extends('adminlte.master')


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pertanyaan</h3>

                    <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 560px;">
                    @if(session('success'))            <!-- cara menampilkan success  -->
                    <div class="alert alert-success">
                    {{session('success')}}
                    </div>
                    @endif
                    <a href="/pertanyaan/create" class="btn btn-info ml-3 mt-2 mb-2" >Buat Baru</a>
                    <table class="table table-bordered">
                    <thead align="center">
                        <tr>
                        <th>#</th>
                        <th>Profil ID</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @forelse($isi as $key => $satuan)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$satuan->profil_id}}</td>
                                <td>{{$satuan->judul}}</td>
                                <td>{{$satuan->isi}}</td>
                                <td>
                                <a  class="btn btn-info btn-sm" href="/pertanyaan/{{$satuan->id}}">Show</a>
                                <a  class="btn btn-sm btn-dark" href="/pertanyaan/{{$satuan->id}}/edit">Edit</a>
                                <div class="mt-1">
                                <form action="/pertanyaan/{{$satuan->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                                </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                        <td>Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
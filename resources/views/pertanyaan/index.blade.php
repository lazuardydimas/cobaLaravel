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
                    <a href="/mempertanyakan/create" class="btn btn-info ml-3 mt-2 mb-2" >Buat Baru</a>
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
                        @forelse($tanya as $key => $tanya)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$tanya->profil_id}}</td>
                                <td>{{$tanya->judul}}</td>
                                <td>{{$tanya->isi}}</td>
                                <td>
                                <a  class="btn btn-info btn-sm" href="/mempertanyakan/{{$tanya->id}}">Show</a>
                                <a  class="btn btn-sm btn-dark" href="/mempertanyakan/{{$tanya->id}}/edit">Edit</a>
                                <div class="mt-1">
                                <form action="/mempertanyakan/{{$tanya->id}}" method="post">
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
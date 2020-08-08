@extends('adminlte.master')

@section('content')

        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Pertanyaan {{$satuan->id}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form  action="/pertanyaan/{{$satuan->id}}" method="POST" role="form">
            @csrf
            @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" value="{{ old('judul',$satuan->judul)}}" id="judul" placeholder="Judul Pertanyaan" name="judul">
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi</label>
                        <input type="text" class="form-control" id="isi" value="{{ old('isi',$satuan->isi)}}" placeholder="Isi Pertanyaan" name="isi">
                        @error('isi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

@endsection
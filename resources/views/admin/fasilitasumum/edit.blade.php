@extends('layout.admin')

@section('content')
    <form method="POST" action="/admin/fasum/update/{{$fasum->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Fasilitas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_fasum" value="{{$fasum->nama_fasum}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="keterangan">{{$fasum->keterangan}}</textarea>
            @error('keterangan')
            <div class="text-danger">
            {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">foto</label>
            <input type="file" class="form-control" name="foto" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
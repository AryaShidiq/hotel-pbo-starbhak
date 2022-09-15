@extends('layout.admin')

@section('content')
    <form method="POST" action="/admin/kamar/store" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_kamar">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tipe_kamar">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Foto</label>
            <input type="file" class="form-control" name="foto_kamar" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

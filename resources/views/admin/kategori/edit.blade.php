@extends('layout.admin')

@section('content')
    <form method="POST" action="/admin/kategori/update/{{$kategori->id}}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tipe_kamar" value="{{$kategori->tipe_kamar}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah" value="{{$kategori->jumlah}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" value="{{$kategori->harga}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fasilitas" value="{{$kategori->fasilitas}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

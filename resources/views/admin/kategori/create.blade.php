@extends('layout.admin')

@section('content')
    <form method="POST" action="/admin/kategori/store">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tipe_kamar">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fasilitas">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

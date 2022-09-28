@extends('layout.admin')

@section('content')
<form method="POST" action="/resepsionis/pemesanan/update/{{$resepsionis->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. Pemesanan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_pemesanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_pemesan">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Check In</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="check_in">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Check Out</label>
            <input type="date" class="form-control" name="check_out" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. Kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_kamar">
        </div>
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="kategori_id" id="kategori_id" style="width: 100%;">
          <option selected>Pilih Tipe Kamar</option>
          @foreach  ($kategori as $kat)
          <option value="{{$kat->id}}">{{$kat->tipe_kamar}}</option>
          @endforeach
          @error('kategori_id')
          <div class="text-danger">
              {{$message}}
          </div>
          @enderror
        </select>
        <select name="status" class="form-select" aria-label="Default select example">
            <option selected>{{$resepsionis->status}}</option>
            <option value="checkin">Check In</option>
            <option value="checkout">Check Out</option>
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Total Harga</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="total_harga">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

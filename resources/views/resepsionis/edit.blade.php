@extends('layout.admin')

@section('content')
<form method="POST" action="/resepsionis/pemesanan/update/{{$resepsionis->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No. Pemesanan</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_pemesanan" value="{{$resepsionis->nomor_pemesanan}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_pemesan" value="{{$resepsionis->nama_pemesan}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Check In</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="check_in" value="{{$resepsionis->check_in}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Check Out</label>
        <input type="date" class="form-control" name="check_out" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$resepsionis->check_out}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No. Kamar</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_kamar" value="{{$resepsionis->nomor_kamar}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Status</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status" value="{{$resepsionis->status}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

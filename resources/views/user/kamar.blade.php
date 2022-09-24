@extends('user.index')

@section('content')

<div class="container-fluid d-flex justify-content-center flex-column align-items-center">
    <h5 class="text-center mt-5 mb-5">
        Kamar Di Hotel Kami
    </h5>
    @foreach($kamar as $ka)
    <div class="row mb-5">
        <img src="{{asset('fotokamar/' .$ka->foto_kamar)}}" alt="" style="max-width: 550px;">
        <h5 class="p-3">{{$ka->tipe_kamar}}</h5>
        <h5 class="p-3">{{$ka->kategori->tipe_kamar}}</h5>
        <h5 class="p-3">{{$ka->harga</h5>
    </div>
    @endforeach
</div>

@endsection
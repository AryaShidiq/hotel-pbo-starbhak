@extends('user.index')

@section('content')

<div class="container-fluid">
    <h5 class="text-center mt-5 mb-5">
        Kamar Di Hotel Kami
    </h5>
    <div class="row mb-5 d-flex align-items-center m-auto">
        @foreach($kamar as $ka)
        <div class="col-lg-4 mb-5">
            <img src="{{asset('fotokamar/' .$ka->foto_kamar)}}" class="img-fluid" alt="" style="max-width: 350px;">
            <h5 class="pt-2">Tipe Kamar : {{$ka->kategori->tipe_kamar}}</h5>
            <h5 class="">Harga Permalam : {{$ka->kategori->harga}}</h5>
        </div>
        @endforeach
    </div>
</div>

@endsection
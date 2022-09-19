@extends('user.index')

@section('content')

<div class="container-fluid d-flex justify-content-center flex-column align-items-center">
    @foreach($kamar_user as $ka)
    <div class="row mb-5">
        <img src="{{asset('fotokamar/' .$ka->foto_kamar)}}" alt="" style="max-width: 550px;">
        <h5 class="p-3">{{$ka->tipe_kamar}}</h5>
    </div>
    @endforeach
</div>

@endsection
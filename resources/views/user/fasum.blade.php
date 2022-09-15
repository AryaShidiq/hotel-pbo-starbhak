@extends('user.index')

@section('content')

<div class="container-fluid mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        @foreach($fasum as $fu)
        <div class="col-md-4 mb-5">
            <img src="{{asset('fasilitasumum/'.$fu->foto)}}" alt="" width="350px">
            <h3>{{$fu->nama_fasum}}</h3>
            <p>{{$fu->keterangan}}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection
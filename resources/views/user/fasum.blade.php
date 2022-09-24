@extends('user.index')

@section('content')

        <div class="container mb-5">
            <h2 class="text-center">Fasilitas</h2>
            <div class="row">
                @foreach($fasum as $fu)
                <div class="col-lg-4">
                    <h5 class="mb-3">{{$fu->nama_fasum}}</h5>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{asset('fasilitasumum/'.$fu->foto)}}" alt="" style="max-width: 23rem;">
                    </div>
                    <p class="mt-3">{{$fu->keterangan}}</p>
                </div>
                @endforeach
            </div>
        </div>

@endsection
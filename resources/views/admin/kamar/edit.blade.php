@extends('layout.admin')

@section('content')
    <form method="POST" action="/admin/kamar/update/{{$kamar->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_kamar" value="{{$kamar->no_kamar}}">
        </div>
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="tipe_kamar_id" id="tipe_kamar_id" style="width: 100%;">
          <option selected>{{$kamar->kategori->tipe_kamar}}</option>
          @foreach  ($kategori as $kat)
          <option value="{{$kat->id}}">{{$kat->tipe_kamar}}</option>
          @endforeach
          @error('tipe_kamar_id')
          <div class="text-danger">
              {{$message}}
          </div>
          @enderror
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Foto</label>
            <input type="file" class="form-control" name="foto_kamar" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

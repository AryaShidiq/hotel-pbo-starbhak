@extends('layout.admin')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col-xl d-flex justify-content-center align-items-center">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Nama Fasilitas</th>
                        <th class="text-center">Ketarangan</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fasum as $fu)
                    <tr>
                        <td class="text-bold-500">{{$fu->nama_fasum}}</td>
                        <td>{{$fu->keterangan}}</td>
                        <td class="text-bold-500">
                             <img src="{{asset('fasilitasumum/'.$fu->foto)}}" alt="" width="200px">
                        </td>
                        <td>
                            <div class="action d-flex justify-content-evenly" style="gap: 0.2rem;">
                            <a href="/admin/fasum/edit/{{$fu->id}}" class="btn btn-warning">EDIT</a>
                            |  <form action="/admin/fasum/delete/{{$fu->id}}" method="POST">
                            @csrf
                            @method('delete')
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-md-4">
        <a href="/admin/fasum/create" class="btn btn-dark"> Tambah Data
        </a>
    </div>
</div>

@endsection
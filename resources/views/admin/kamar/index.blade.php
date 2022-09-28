@extends('layout.admin')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col-xl d-flex justify-content-center align-items-center">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center col">No. kamar</th>
                        <th class="text-center col">Tipe Kamar</th>
                        <th class="text-center col">Foto</th>
                        <th class="text-center col">Harga</th>
                        <th class="text-center col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kamar as  $mar)
                    
                    <tr>
                        <td class="text-bold-500">{{$mar->no_kamar}}</td>
                        <td>
                            {{$mar->kategori->tipe_kamar}}
                        </td>
                        <td>
                            <img src="{{asset('fotokamar/'.$mar->foto_kamar)}}" alt="" width="200px">
                        </td>
                        <td>{{$mar->kategori->harga}}</td>
                        <td>
                            <div class="action d-flex justify-content-evenly" style="gap: 0.2rem;">
                                <a href="/admin/kamar/edit/{{$mar->id}}" class="btn btn-warning">EDIT</a>
                                | <form action="/admin/kamar/delete/{{$mar->id}}" method="POST">
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
            {{ $kamar->links() }}
        </div>
    </div>
</div>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-md-4">
        <a href="/admin/kamar/create" class="btn btn-dark"> Tambah Data
        </a>
    </div>
</div>

@endsection

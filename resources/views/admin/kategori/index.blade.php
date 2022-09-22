@extends('layout.admin')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col-xl d-flex justify-content-center align-items-center">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Tipe Kamar</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $kat)
                    <tr>
                        <td class="text-bold-500">{{$kat->tipe_kamar}}</td>
                        <td>{{$kat->jumlah}}</td>
                        <td>
                            <div class="action d-flex justify-content-evenly" style="gap: 0.2rem;">
                                <a href="/admin/kategori/edit/{{$kat->id}}" class="btn btn-warning">EDIT</a>
                                | <form action="/admin/kategori/delete/{{$kat->id}}" method="POST">
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
            {{$kategori->links()}}
        </div>
    </div>
</div>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-md-4">
        <a href="/admin/kategori/create" class="btn btn-dark"> Tambah Data
        </a>
    </div>
</div>

@endsection

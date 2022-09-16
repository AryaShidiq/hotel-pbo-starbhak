@extends('layout.resepsionis')

@section('content')

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-md-4">
        <a href="/resepsionis/pemesanan/create" class="btn btn-dark"> Tambah Data
        </a>
    </div>
</div>

<div class="row mt-5 mb-5">
    <div class="col-xl d-flex justify-content-center align-items-center">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">No. Pemesanan</th>
                        <th class="text-center">Nama Pemesan</th>
                        <th class="text-center">Chek in</th>
                        <th class="text-center">Chek Out</th>
                        <th class="text-center">No. Kamar</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($resepsionis as $resep)
                    <tr>
                        <td class="text-bold-500">{{$resep->nomor_pemesanan}}</td>
                        <td>{{$resep->nama_pemesan}}</td>
                        <td>{{$resep->check_in}}</td>
                        <td>{{$resep->check_out}}</td>
                        <td>{{$resep->nomor_kamar}}</td>
                        <td>{{$resep->status}}</td>
                        <td>
                            <div class="action d-flex justify-content-evenly" style="gap: 0.2rem;">
                                <a href="/admin/kamar/edit/{{$resep->id}}" class="btn btn-warning">EDIT</a>
                                | <form action="/admin/kamar/delete/{{$resep->id}}" method="POST">
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



@endsection

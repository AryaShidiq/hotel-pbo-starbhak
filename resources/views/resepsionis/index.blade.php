@extends('layout.admin')

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
        <form method="GET">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">
                    Cari Data
                </label>
                <div class="col-sm-10">
                    <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Nama Tamu Atau Tanggal Check In" autofocus="true" value="{{ $cari }}">
                </div>
            </div>
        </form>
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">No. Pemesanan</th>
                        <th class="text-center">Nama Pemesan</th>
                        <th class="text-center">Check in</th>
                        <th class="text-center">Check Out</th>
                        <th class="text-center">No. Kamar</th>
                        <th class="text-center">Tipe Kamar</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Total Harga</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $nomor = 1 +(($resepsionis->currentPage()-1) * $resepsionis->perPage());
                    @endphp
                    @foreach($resepsionis as $resep)
                    <tr>
                        <td class="text-bold-500 text-center">{{$nomor++}}</td>
                        <td class="text-bold-500 text-center">{{$resep->nomor_pemesanan}}</td>
                        <td class="text-center">{{$resep->nama_pemesan}}</td>
                        <td class="text-center">{{$resep->check_in}}</td>
                        <td class="text-center">{{$resep->check_out}}</td>
                        <td class="text-center">{{$resep->nomor_kamar}}</td>
                        <td class="text-center">{{$resep->kategori?->tipe_kamar}}</td>
                        <td class="text-center">{{$resep->status}}</td>
                        <td class="text-center">{{$resep->total_harga}}</td>
                        <td>
                            <div class="action d-flex justify-content-evenly" style="gap: 0.2rem;">
                                <a href="/resepsionis/pemesanan/edit/{{$resep->id}}" class="btn btn-warning">EDIT</a>
                                | <form action="/resepsionis/pemesanan/delete/{{$resep->id}}" method="POST">
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
            <div class="mt-4">
                {{ $resepsionis->links() }}
            </div>
        </div>
    </div>
</div>



@endsection

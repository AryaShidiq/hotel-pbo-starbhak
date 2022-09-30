@extends('user.index')

@section('content')
<div class="content-wrapper">
    <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Data Perjalanan
                  </h3>
                  <div class="table-responsive mt-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Waktu</th>
                          <th>Lokasi</th>
                          <th>Suhu Tubuh</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                            <td>{{$row->nama_pemesan}}</td>
                            <td>{{$row->checkin}}</td>
                            <td>{{$row->checkout}}</td>
                            <td>{{$row->kategori->tipe_kamar}}°C</td>
                            <td>
                            <a class="btn btn-link ms-auto text-end text-dark px-3 mb-0" href="/vdpuser/{{$row->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                        <a class="btn btn-link ms-auto text-end text-danger text-gradient px-3 mb-0" href="/ddpuser/{{$row->id}}"><i class="far fa-trash-alt me-2"></i>Delete</a></td>
                        </tr>
                      @endforeach
                      <a href="/duser" class="btn btn-primary">Kembali</a>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
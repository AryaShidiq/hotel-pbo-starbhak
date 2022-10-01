<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Navbar -->
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-light bg-light mt-1">
              <div class="container">
                  <a class="navbar-brand" href="#">Hotel Bonvoy</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ms-auto">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/kamar">Kamar</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/fasilitashotel">Fasilitas</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/logout">Logout</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/data-reservasi">Data Reservasi</a>
                          </li>
                      </ul>
                  </div>
              </div>
            </nav>
        </div>
    <!-- Navbar End -->

    <!-- Konten -->
      <h5 class="text-center mt 5">Data Reservasi Anda</h5>
      <div class="container">
        <div class="row">
          <div class="md-8">
            <div class="container">
              <div class="row">
                <div class="md-10">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nama Pemesan</th>
                      <th scope="col">Tanggal Check In</th>
                      <th scope="col">Tanggal Check Out</th>
                      <th scope="col">Tipe Kamar</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $d)
                    <tr>
                      <th scope="row">{{$d->nama_pemesan}}</th>
                      <th scope="row">{{$d->check_in}}</th>
                      <th scope="row">{{$d->check_out}}</th>
                      <th scope="row">{{$d->kategori->tipe_kamar}}</th>
                      <th scope="row">
                        <a href="/cetakbukti/{{$d->id}}" class="btn btn-primary">Cetak Bukti</a>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Konten End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
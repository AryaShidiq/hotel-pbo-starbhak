<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        #banner{
            background-color: chocolate;
            border-radius: 1.7rem;
        }
    </style>
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Pesan Kamar
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    <!-- Navbar End -->
  
    <!-- Image Hotel -->
        <div class="d-flex justify-content-center align-items-center mb-5 mt-5">
            <img src="assets/images/page1.jpg" alt="" class="img-fluid" style="max-width:90%;">
        </div>
    <!-- Image Hotel End -->

    <!-- Konten 1 -->
        <div class="container-fluid mb-5">
            <div class="row d-flex justify-content-center align-item-center">
                <div class="col-sm-4 d-flex justify-content-center align-item-center" id="banner">
                    <h3 class="p-5 text-white">Hotel Bonvoy</h3>
                </div>
            </div>
        </div>
    <!-- Konten 1 End -->

    <!-- Konten 2 -->
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/tambahpemesanan">
                        @csrf
                        <!-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No. Pemesanan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_pemesanan">
                        </div> -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_pemesan">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Check In</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="check_in">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Check Out</label>
                            <input type="date" class="form-control" name="check_out" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No. Kamar</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_kamar">
                        </div> -->
                        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="kategori_id" id="kategori_id" style="width: 100%;">
                            <option selected>Pilih Tipe Kamar</option>
                            @foreach  ($kategori as $kat)
                            <option value="{{$kat->id}}">{{$kat->tipe_kamar}}</option>
                            @endforeach
                            @error('kategori_id')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </select>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Pesan</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
    <!-- Konten 2 End -->

    <!-- Konten 3 -->
    @yield('content')
    <!-- Konten 3  end-->


    <!-- Footer -->
    <footer>
        <div class="container-fluid mt-5 mb-5">
            <h1 class="text-center">Tentang Kami</h1>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-10">
                    <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, minus. Quos minus sed, fugit quidem
                    tempora quod esse sunt modi quaerat suscipit alias repellat est blanditiis praesentium eius et
                    reiciendis ut mollitia. Provident, corporis facere. Eligendi nobis accusantium distinctio voluptatum
                    recusandae laudantium esse doloribus! Quos non maiores cumque ad quas qui debitis voluptatibus
                    necessitatibus a, culpa quidem sint laborum corrupti autem ipsa nesciunt veritatis rem
                    exercitationem nemo eos ducimus explicabo, fugiat nam delectus. Reprehenderit velit dolores
                    veritatis culpa ducimus a explicabo quod eius, molestias harum odio maiores quae nam unde! Sunt eius
                    aliquam impedit esse similique, fugiat iure cupiditate qui.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    @include('sweetalert::alert')
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
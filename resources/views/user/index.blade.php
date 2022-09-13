<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hotel Bonvoy</title>
    <style>
        .form-tamu{
            gap: 1rem;
        }
    </style>
  </head>
  <body>
    
    <!-- NAVBAR -->
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
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kamar">Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fasilitashotel">Fasilitas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- NAVBAR CLOSED-->

    <!-- SECTION 1 -->
    <section>
        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-md">
                    <center>
                        <img src="assets/images/home.jpg" alt="" width="90%">
                    </center>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md d-flex justify-content-center align-items-center">
                
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 1 CLOSED-->

    <!-- SECTON 2 -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <form action="" class="d-flex justify-content-center form-tamu">
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Check In</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Check Out</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Kamar</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="button d-flex justify-content-center mt-3">
                    <a href="/pesan" class="btn btn-primary">PESAN</a>
                    <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    PESAN JUGA
                    </button>
                </div>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h2>FORM PEMESANAN</h2>
                                <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Handphone</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTON 2 CLOSED-->

    <!-- SECTION 3 -->
    <section>
        @yield('content')
    </section>
    <!-- SECTION 3 CLOSED-->

    <!-- SECTION 4 -->
    <div class="container-fluid mb-5">
        <h1 class="text-center">Tentang Kami</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, minus. Quos minus sed, fugit quidem tempora quod esse sunt modi quaerat suscipit alias repellat est blanditiis praesentium eius et reiciendis ut mollitia. Provident, corporis facere. Eligendi nobis accusantium distinctio voluptatum recusandae laudantium esse doloribus! Quos non maiores cumque ad quas qui debitis voluptatibus necessitatibus a, culpa quidem sint laborum corrupti autem ipsa nesciunt veritatis rem exercitationem nemo eos ducimus explicabo, fugiat nam delectus. Reprehenderit velit dolores veritatis culpa ducimus a explicabo quod eius, molestias harum odio maiores quae nam unde! Sunt eius aliquam impedit esse similique, fugiat iure cupiditate qui.</h6>
            </div>
        </div>
    </div>
    <!-- SECTION 4 CLOSED-->

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
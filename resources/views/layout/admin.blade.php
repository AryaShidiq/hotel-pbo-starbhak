<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonvoy Hotel</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/../assets/css/bootstrap.css">

    <link rel="stylesheet" href="/../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/../assets/css/app.css">
    <link rel="shortcut icon" href="/../assets/images/favicon.svg" type="image/x-icon">

    <!-- FONT AWESOME -->
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/admin"><img src="/../assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Database</span>
                            </a>
                            
                            <ul class="submenu ">
                                @if ( auth()->user()->role=="admin")
                                <li class="submenu-item ">
                                    <a href="/admin/kamar" class='sidebar-link'>
                                        <i class="bi bi-grid-1x2-fill"></i>
                                        <span>Kamar</span>
                                    </a>
                                </li>
                                @endif
                                @if ( auth()->user()->role=="admin")
                                <li class="submenu-item ">
                                    <a href="/admin/kategori" class='sidebar-link'>
                                        <i class="bi bi-grid-1x2-fill"></i>
                                        <span>Tipe Kamar</span>
                                    </a>
                                </li>
                                @endif
                                @if ( auth()->user()->role=="resepsionis")
                                <li class="submenu-item ">
                                    <a href="/resepsionis" class='sidebar-link'>
                                        <i class="bi bi-grid-1x2-fill"></i>
                                        <span>Pemesanan</span>
                                    </a>
                                </li>
                                @endif
                                @if ( auth()->user()->role=="admin")
                                <li class="submenu-item ">
                                    <a href="/admin/fasum" class='sidebar-link'>
                                        <i class="bi bi-grid-1x2-fill"></i>
                                        <span>Fasilitas Umum</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading d-flex justify-content-around">
                <h3>Profile Statistics</h3>
                <p>{{ Auth::user()->name}}</p>
                <p>Role : {{ Auth::user()->role }}</p>
                <a href="/logout" class="btn btn-danger rounded-pill">Logout</a>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Followers</h6>
                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Following</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
    <script src="/../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/../assets/js/bootstrap.bundle.min.js"></script>

    <script src="/../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/../assets/js/pages/dashboard.js"></script>

    <script src="/../assets/js/main.js"></script>
</body>

</html>

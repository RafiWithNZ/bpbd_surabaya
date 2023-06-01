<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPBD Surabaya | Dashboard</title>

    {{-- leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('template/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->

    <link rel="stylesheet" href="{{asset('template/')}}/plugins/summernote/summernote-bs4.min.css"> 
     {{-- Bostrap CSS --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/summernote/summernote-bs4.min.css">

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('template/')}}/dist/img/LOGO BPBD KOTA SURABAYA.png"
                alt="BPBDLogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="fas fa-regular fa-right-from-bracket"></i> Logout
                        </button>
                    </form>

                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link text-decoration-none">
                <img src="{{asset('template/')}}/dist/img/LOGO BPBD KOTA SURABAYA.png" alt="BPBD Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="sidebar-title" style="color:white; margin-left:12px;"><b>BPBD Surabaya</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <i class="fa-solid fa-user ml-4 mr-2" style="color:rgb(255, 255, 255);"></i>
                        <a href="#"
                            class="text-white font-weight-bold text-decoration-none">{{auth()->user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-house" style="color:rgb(255, 174, 0);"></i>
                                <p class="font-weight-bold">Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/utama') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-pager " style="color:rgb(255, 174, 0);"></i>
                                <p class="font-weight-bold">Halaman utama</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <i class="nav-icon fa-solid fa-gear fa-spin" style="color:rgb(255, 174, 0);"></i>
                                <p class="font-weight-bold">
                                    3 Menu Utama
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/prabencana') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon" style="color:rgb(255, 174, 0);"></i>
                                        <p class="font-weight-bold">Pra Bencana</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon" style="color:rgb(255, 174, 0);"></i>
                                        <p class="font-weight-bold">Tanggap Darurat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon" style="color:rgb(255, 174, 0);"></i>
                                        <p class="font-weight-bold">Pasca Bencana</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-sharp fa-solid fa-check-square fa-bounce"
                                    style="color:rgb(255, 174, 0);"></i>
                                <p class="font-weight-bold">
                                    Layanan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon" style="color:rgb(255, 174, 0);"></i>
                                        <p class="font-weight-bold">Kedaruratan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon" style="color:rgb(255, 174, 0);"></i>
                                        <p class="font-weight-bold">Penilaian resiko</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon" style="color:rgb(255, 174, 0);"></i>
                                        <p class="font-weight-bold">Pendaftaran</p>
                                        <p class="font-weight-bold" style="margin-left:35px">sosialisasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon" style="color:rgb(255, 174, 0);"></i>
                                        <p class="font-weight-bold">
                                            Perizinan
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('/prabencana') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"
                                                    style="color:rgb(255, 174, 0);margin-left:20px"></i>
                                                <p class="font-weight-bold" style="margin-left:20px">Pengumpulan
                                                    sumbangan bencana</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/UI/buttons.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"
                                                    style="color:rgb(255, 174, 0);margin-left:20px"></i>
                                                <p class="font-weight-bold" style="margin-left:20px">Rekomendasi
                                                    magang/penelitian di BPBD</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/newsupdate') }}" class="nav-link">
                                <i class="nav-icon fas fa-newspaper fa-flip" style="color:rgb(255, 174, 0);"></i>

                                <p class="font-weight-bold">
                                    News Update
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/dashboard/organisasi') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-users-rectangle fa-shake"
                                    style="color:rgb(255, 174, 0);"></i>

                                <p class="font-weight-bold">
                                    Struktur Organisasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/posPantau" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-flag fa-beat-fade"
                                    style="color:rgb(255, 174, 0);"></i>

                                <p class="font-weight-bold">
                                    Pos Pantau
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
        </aside>

        @yield('content')

        {{-- Javascript Input Button Confirm --}}
        <script src="{{ asset('js/submitconfirm.js') }}"></script>
        <!-- jQuery -->
        <script src="{{asset('template/')}}/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('template/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('template/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="{{asset('template/')}}/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="{{asset('template/')}}/plugins/sparklines/sparkline.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('template/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="{{asset('template/')}}/plugins/moment/moment.min.js"></script>
        <script src="{{asset('template/')}}/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('template/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
        </script>
        <!-- Summernote -->
        <script src="{{asset('template/')}}/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('template/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('template/')}}/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('template/')}}/dist/js/pages/dashboard.js"></script>
        <!-- CKEditor 5 -->
        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

        @yield('scripts')

        @stack('js')

</body>

</html>
@extends('partials.navbar')

@section('content')

<div> Coming Soon </div>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div></div>

@endsection
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('template/')}}/dist/img/LOGO BPBD KOTA SURABAYA.png"
                alt="BPBPLogo" height="60" width="60">
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
            <a href="dashboard" class="brand-link text-decoration-none">
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
                            <a href="{{ url('/dashboard') }}" class="nav-link active">
                                <i class="nav-icon fa-solid fa-house" style="color:rgb(255, 174, 0);"></i>

                                <p class="font-weight-bold">
                                    Halaman Utama
                                </p>
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
                                <i class="nav-icon fa-sharp fa-solid fa-check-square"
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
                                <li class="nav-item">
                                    <a href="/dashboard/posPantau" class="nav-link">
                                        <i class="nav-icon fas fa-solid fa-flag" style="color:rgb(255, 174, 0);"></i>

                                        <p class="font-weight-bold">
                                            Pos Pantau
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/newsupdate') }}" class="nav-link">
                                <i class="nav-icon fas fa-newspaper" style="color:rgb(255, 174, 0);"></i>

                                <p class="font-weight-bold">
                                    News Update
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/dashboard/organisasi') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-users-rectangle" style="color:rgb(255, 174, 0);"></i>

                                <p class="font-weight-bold">
                                    Struktur Organisasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/posPantau" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-flag" style="color:rgb(255, 174, 0);"></i>

                                <p class="font-weight-bold">
                                    Pos Pantau
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Halaman Utama</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Admin BPBD</a></li>
                                <li class="breadcrumb-item active">Halaman Utama</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                {{-- Alert --}}
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                    {{session('success')}}
                </div>
                @endif
                @if(session()->has('fail'))
                <div class="alert alert-danger alert-dismissible fade show col-lg-8" role="alert">
                    {{session('fail')}}
                </div>
                @endif


                <div class="ml-3 mt-3 mb-3">
                    <form class="forms-sample" action="{{url('/updatemain')}}" method="POST"
                        enctype="multipart/form-data" onsubmit="return confirmSubmit()">
                        @csrf
                        <div class="mb-3">
                            <label for="video" class="form-label">Background Video</label>
                            <div class="mb-3">
                                @foreach($datavideo as $datavideo)
                                <a href="{{ asset('video/' . $datavideo->nama_video  ) }}" target="_blank"
                                    style="text-decoration: none;"><i class="fas fa-video"></i> {{
                                    $datavideo->nama_video }}</a>
                                @endforeach
                            </div>
                            <input class="form-control w-75" type="file" id="video" name="videobackground"
                                accept="video/mp4,video/x-m4v,video/*" />
                            <div class="text-muted">Catatan : Rasio video yang direkomendasikan adalah
                                00 x 00 untuk mendapatkan tampilan penuh pada layar</div>
                        </div>
                        <div class="mb-3">
                            <label for="fotowalikota" class="form-label">Foto Walikota</label>
                            <div class="mb-3">
                                @foreach($gambar1 as $gambar1)
                                <a href="{{ asset('img/' . $gambar1->nama_gambar ) }}" target="_blank"
                                    style="text-decoration: none;"><i class="fas fa-image"></i> {{ $gambar1->nama_gambar
                                    }}</a>
                                @endforeach
                            </div>
                            <input type="file" class="form-control w-75" id="fotowalikota" name="fotowalikota"
                                accept="image/png, image/gif, image/jpeg, image/jpg" />
                            <div class="text-muted">Catatan : Rasio foto yang direkomendasikan adalah 0 x 0</div>
                        </div>
                        <div class="mb-3">
                            <label for="namawalikota" class="form-label">Nama Walikota</label>
                            @foreach($wali as $wali)
                            <input type="text" class="form-control w-75" id="namawalikota" name="namawalikota"
                                value="{{ $wali->nama }}" required />
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="fotowakil" class="form-label">Foto Wakil Walikota</label>
                            <div class="mb-3">
                                @foreach($gambar2 as $gambar2)
                                <a href="{{ asset('img/' . $gambar2->nama_gambar ) }}" target="_blank"
                                    style="text-decoration: none;"><i class="fas fa-image"></i> {{ $gambar2->nama_gambar
                                    }}</a>
                                @endforeach
                            </div>
                            <input type="file" class="form-control w-75" id="fotowakil" name="fotowakil"
                                accept="image/png, image/gif, image/jpeg, image/jpg" />
                            <div class="text-muted">Catatan : Rasio foto yang direkomendasikan adalah 0 x 0</div>
                        </div>
                        <div class="mb-3">
                            <label for="namawakil" class="form-label">Nama Wakil Walikota</label>
                            @foreach($wakil as $wakil)
                            <input type="text" class="form-control w-75" id="namawakil" name="namawakil"
                                value="{{ $wakil->nama }}" required />
                            @endforeach
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Semua Data Telah Benar</label>
                        </div>
                        <div class="mb-3">
                            <div class="text-danger mt-2">*Data - data yang tidak diubah tidak akan hilang (Hanya data
                                yang mengalami perubahan yang disimpan), perubahan yang disimpan akan menggantikan data
                                yang sebelumnya, harap pastikan semua data yang diinput telah benar.</div>
                        </div>
                        <button type="submit" class="buttonconfirm btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>

            </section>

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

</body>

</html>

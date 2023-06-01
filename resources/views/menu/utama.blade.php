@extends('partials.navbar')

@section('content')


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
                        <form class="forms-sample" action="{{url('/updatemain')}}" method="POST" enctype="multipart/form-data" onsubmit="return confirmSubmit()">
                        @csrf
                            <div class="mb-3">
                                <label for="video" class="form-label">Background Video</label>
                                <div class="mb-3">
                                    @foreach($datavideo as $datavideo)
                                    <a href="{{ asset('video/' . $datavideo->nama_video  ) }}" target="_blank" style="text-decoration: none;"><i class="fas fa-video"></i> {{ $datavideo->nama_video }}</a>
                                    @endforeach
                                </div>
                                <input class="form-control w-75" type="file" id="video" name="videobackground" accept="video/mp4,video/x-m4v,video/*"/>
                                <div class="text-muted">Catatan : Rasio video yang direkomendasikan adalah 
                                    00 x 00 untuk mendapatkan tampilan penuh pada layar</div>
                              </div>
                            <div class="mb-3">
                                <label for="fotowalikota" class="form-label">Foto Walikota</label>
                                <div class="mb-3">
                                @foreach($gambar1 as $gambar1)
                                <a href="{{ asset('img/' . $gambar1->nama_gambar ) }}" target="_blank" style="text-decoration: none;"><i class="fas fa-image"></i> {{ $gambar1->nama_gambar }}</a>
                                @endforeach
                                </div>
                                <input type="file" class="form-control w-75" id="fotowalikota" name="fotowalikota" accept="image/png, image/gif, image/jpeg, image/jpg" />
                                <div class="text-muted">Catatan : Rasio foto yang direkomendasikan adalah 0 x 0</div>
                              </div>
                            <div class="mb-3">
                              <label for="namawalikota" class="form-label">Nama Walikota</label>
                              @foreach($wali as $wali)
                              <input type="text" class="form-control w-75" id="namawalikota" name="namawalikota" value="{{ $wali->nama }}" required />
                              @endforeach
                            </div>
                            <div class="mb-3">
                                <label for="fotowakil" class="form-label">Foto Wakil Walikota</label>
                                <div class="mb-3">
                                    @foreach($gambar2 as $gambar2)
                                    <a href="{{ asset('img/' . $gambar2->nama_gambar ) }}" target="_blank" style="text-decoration: none;"><i class="fas fa-image"></i> {{ $gambar2->nama_gambar }}</a>
                                    @endforeach
                                    </div>
                                <input type="file" class="form-control w-75" id="fotowakil" name="fotowakil" accept="image/png, image/gif, image/jpeg, image/jpg"/>
                                <div class="text-muted">Catatan : Rasio foto yang direkomendasikan adalah 0 x 0</div>
                              </div>
                            <div class="mb-3">
                              <label for="namawakil" class="form-label">Nama Wakil Walikota</label>
                              @foreach($wakil as $wakil)
                              <input type="text" class="form-control w-75" id="namawakil" name="namawakil" value="{{ $wakil->nama }}" required />
                              @endforeach
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                              <label class="form-check-label" for="exampleCheck1">Semua Data Telah Benar</label>
                            </div>
                            <div class="mb-3">
                            <div class="mt-2">Catatan :</div>
                            <div class="text-danger mt-2">1. Data - data yang tidak diubah tidak akan hilang. (Hanya data yang mengalami perubahan yang disimpan)</div>
                            <div class="text-danger mt-2">2. Perubahan yang disimpan akan menggantikan data yang sebelumnya.</div>
                            <div class="text-danger mt-2">3. Harap pastikan semua data yang diinput telah benar sebelum menyimpan perubahan.</div>
                            </div>
                            <button type="submit" class="buttonconfirm btn btn-primary m-1 mb-5">Simpan Perubahan</button>
                            </form>
                    </div>
            </section>
@endsection

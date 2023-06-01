@extends('partials.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin BPBD</a></li>
              <li class="breadcrumb-item active">News Update</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <head>
    {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <!-- Main content -->
    <section class="content">
    
     <!-- Alert -->
     @if($errors->any())
      <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
     @endif

      <!-- Detail -->
      <div class="ml-3 mt-3 mb-3">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                  <th>Judul</th>
                  <td>{{ $news -> judul }}</td>
                </tr>
                <tr>
                  <th>Tanggal Dibuat</th>
                  <td>{{ $news -> created_at }}</td>
                  <tr>
                    <th>Tanggal Diedit</th>
                    <td>{{ $news -> updated_at }}</td>
                  </tr>
                </tr>
                <tr>
                  <th>Gambar</th>
                  <td>
                    <img src="{{asset('storage/img/'. $news->gambar_berita)}}" width="30%">
                  </td>
                </tr>
                <tr>
                  <th>Deskripsi</th>
                  <td>{!! $news -> deskripsi_berita !!}</td>
                </tr>
            </table>
            <div class="justify-content-center d-flex" style="margin-top: 50px">
                <a href="{{ url('/newsupdate')}}" class="btn btn-primary mb-2">Kembali</a>
            </div>
        </div> 
      </div>
        
    </section>
@endsection

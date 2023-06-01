@extends('partials.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pra bencana</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin BPBD</a></li>
              <li class="breadcrumb-item active">Prabencana</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">

       <!-- Alert -->
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
      <!-- tabel -->
      <div class="ml-3 mt-3 mb-3">

        <table class="table table-bordered table-striped">
           <thead class="text-center">
              <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Action</th>
              </tr>
           </thead>

           <tbody>
              @foreach ($konten as $konten)
                <tr>
                  <td style="text-align: center">{{ $loop->iteration }}</td>
                  <td style="text-align: center">{{ $konten->judul}}</td>
                  <td style="text-align: center">{{ $konten->deskripsi_prabencana}}</td>
                  <td style="text-align: center">{{ $konten->gambar_prabencana}}</td>
                  <td class="text-center">
                    <a href="{{ url('/prabencana'.$konten->id).'/detail'}}"class="btn btn-primary mb-2"style="width:100px">Detail</a>
                    <a href="{{ url('/prabencana'.$konten->id).'/edit'}}"class="btn btn-success mb-2"style="width:100px">Edit</a>
                  </td>
                </tr>
              @endforeach
           </tbody>
        </table>
      </div>
        
    </section>
@endsection

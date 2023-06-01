@extends('partials.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">News Update</h1>
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
        <a href="{{url('/newsupdate/create')}}" class="btn btn-primary mb-2">
        <i class="nav-icon fa-solid fa-plus" style="color:#FFFFF"></i>Tambah Berita
        </a>

        <table class="table table-bordered table-striped">
           <thead class="text-center">
              <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tanggal Dibuat</th>
                  <th>Tanggal Diedit</th>
                  <th>Action</th>
              </tr>
           </thead>

           <tbody>
              @foreach ($newses as $news)
                <tr>
                  <td style="text-align: center">{{ $loop->iteration }}</td>
                  <td style="text-align: center">{{ $news->judul}}</td>
                  <td style="text-align: center">{{ $news->created_at->format('d-m-Y')}}</td>
                  <td style="text-align: center">{{ $news->updated_at->format('d-m-Y')}}</td>
                  <td class="text-center">
                    <a href="{{ url('/newsupdate/'.$news->id).'/detail'}}"class="btn btn-primary mb-2"style="width:100px">Detail</a>
                    <a href="{{ url('/newsupdate/'.$news->id).'/edit'}}"class="btn btn-success mb-2"style="width:100px">Edit</a>
                    <form action="{{ url('/newsupdate/'.$news->id)}}" method="post"class="d-inline">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger mb-2"style="width:100px"onclick="return confirm('Yakin untuk menghapus?')">
                        <span data-feather="x-circle" class="align-text-bottom">Delete</span>
                      </button>
                    </form>
                    {{-- <button class="btn btn-danger mb-2"style="width:100px" 
                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</button>
              
                    <form id="delete-form" action="{{ url('/newsupdate/'.$news->id)}}" method="POST" class="d-none">
                      @csrf
                      @method('DELETE')
                    </form> --}}
                  </td>
                </tr>
              @endforeach
           </tbody>
        </table>
      </div>
        
    </section>
@endsection

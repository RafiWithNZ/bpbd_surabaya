@extends('partials.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Berita</h1>
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

      <!-- Editor -->
      <div class="ml-3 mt-3 mb-3">
        <form action="{{ url('/newsupdate/create') }}" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
            <div class="mb-3">
                <label for="gambarberita" class="form-label">Gambar</label>
                    <input type="file" name="gambarberita" id="gambarberita" class="form-control" accept="image/png, image/gif, image/jpeg, image/jpg" />
                    <div class="text-muted">Format gambar yang diperbolehkan : png, jpg, jpeg, gif</div>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi Berita</label>
                <textarea name="desc" id="task-textarea" cols="30" rows="10"class="form-control" ></textarea>
            </div>
            <div class="justify-content-center d-flex">
                <button class="btn btn-primary">Tambah berita</button>
            </div>
        </form>
      </div>
        
    </section>
@endsection

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#task-textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection

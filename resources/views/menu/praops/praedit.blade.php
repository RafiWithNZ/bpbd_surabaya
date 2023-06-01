@extends('partials.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Konten Prabencana</h1>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

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
        <form action="{{ url('/prabencana'.$konten->id) }}" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            
            <div class="mb-3">
              <label for="gambarprabencana" class="form-label">Gambar</label>
                  <input type="file" name="gambarprabencana" id="gambarprabencana" class="form-control" value="{{old('gambarprabencana', $konten->gambar_prabencana);}}" accept="image/png, image/gif, image/jpeg, image/jpg" />
                  <div class="text-muted">Format gambar yang diperbolehkan : png, jpg, jpeg, gif</div>
          </div>
            <div class="mb-3">
                <label for="descpra" class="form-label">Deskripsi</label>
                <textarea name="descpra" id="task-textarea" cols="30" rows="10"class="form-control" value="{{old('descpra', $konten->deskripsi_prabencana);}}"></textarea>
            </div>

            <div class="justify-content-center d-flex">
                <button class="btn btn-primary">Simpan Perubahan</button>
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

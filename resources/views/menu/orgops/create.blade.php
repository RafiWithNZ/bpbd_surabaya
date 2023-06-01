@extends('partials.navbar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Anggota Baru</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Admin BPBD</a></li>
                        <li class="breadcrumb-item ">Struktur Organisasi</li>
                        <li class="breadcrumb-item active">Tambah Anggota</li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form method="post" action="/dashboard/organisasi" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_anggota">Nama Anggota</label>
                <input type="text" class="form-control @error('nama_anggota')is-invalid @enderror" id="nama_anggota"
                    name="nama_anggota" required>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug"
                    required>
            </div>
            <div class="form-group">
                <select class="form-control" name="jabatan_id">
                    @foreach($jabatan as $post)
                    <option value="{{$post->id}} ">{{$post->jabatan}}</option>

                    @endforeach

                </select>
            </div>


            <button type="submit" class="btn btn-primary">Tambah Anggota</button>
        </form>

    </section>
</div>

<script>
    const title = document.querySelector("#nama_anggota");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });
</script>



@endsection
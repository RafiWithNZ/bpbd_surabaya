@extends('partials.navbar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Admin BPBD</a></li>
                        <li class="breadcrumb-item ">Struktur Organisasi</li>
                        <li class="breadcrumb-item active">Edit</li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form method="post" action="/dashboard/organisasi/{{$organisasi->slug}}" method="post"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="nama_anggota">Nama Anggota</label>
                <input type="text" class="form-control @error('nama_anggota')is-invalid @enderror" id="nama_anggota"
                    name="nama_anggota" value="{{old('nama_anggota', $organisasi->nama_anggota)}}" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="jabatan_id">
                    @foreach($jabatan as $post)
                    @if (old('jabatan_id', $post->jabatan_id) == $post->id)

                    <option value="{{$jabatan->id}} " selected>{{$post->jabatan}}</option>

                    @else
                    <option value="{{$post->id}} ">{{$post->jabatan}}</option>

                    @endif

                    @endforeach

                </select>
            </div>


            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>

    </section>
</div>



@endsection
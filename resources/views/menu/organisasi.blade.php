@extends('partials.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Struktur Organisasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Admin BPBD</a></li>
                        <li class="breadcrumb-item active">Struktur Organisasi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form>
            <div class="mb-3">
                <div class="table-responsive mt-2 col-lg-8">

                    <a href="/dashboard/organisasi/create" class="btn btn-primary mb-3"> buat anggota baru</a>

                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $organisasi)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$organisasi->nama_anggota}}</td>
                                <td>{{$organisasi->jabatan->jabatan}}</td>

                                <td>
                                    <a href="/dashboard/organisasi/{{$organisasi->slug}}/edit" class="btn btn-info">
                                        <span data-feather="edit" class="align-text-bottom"></span>Edit</a>
                                    {{-- <form action="/dashboard/organisasi/{{$organisasi->slug}}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Ingin Hapus Post ?')">

                                            <span data-feather="x-circle" class="align-text-bottom">Delete</span>
                                        </button>
                                    </form> --}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

    </section>


    <script>
        $('.alert').alert()

    </script>
    @endsection
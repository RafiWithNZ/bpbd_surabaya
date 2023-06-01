@extends('partials.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pos Pantau</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Admin BPBD</a></li>
                        <li class="breadcrumb-item active">Pos Pantau</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="margin-bottom: 30px">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div id="map" style="height: 400px; width:75%; margin:auto;"></div>

        <table class="table table-striped table-sm ">
            <a href="/dashboard/posPantau/create" class="btn btn-primary mb-3 mt-3 text-center"> buat pos baru</a>

            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pos as $pospantau)

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$pospantau->nama}}</td>
                    <td>{{$pospantau->lokasi}}</td>
                    <td> <a href="/dashboard/posPantau/{{$pospantau->id}}/edit" class="btn btn-info">
                            <span data-feather="edit" class="align-text-bottom"></span>Edit</a>

                        <form action="/dashboard/posPantau/{{$pospantau->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Ingin Hapus Post ?')">

                                <span data-feather="x-circle" class="align-text-bottom">Hapus</span>
                            </button>



                        </form>

                    <td>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <script>
        //Tampilan map
        var map = L.map('map').setView([-7.254489274588427, 112.75560412548504], 12.5);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);


var popup = L.popup();
      
        //onclick Map
        
function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}

map.on('click', onMapClick);
        //data adding

$(document).ready(function(){
       $.getJSON('/marker/json',function(data) {
$.each(data, function(index) {
    var marker = L.marker([data[index].lat ,data[index].long]).addTo(map);
    marker.bindPopup("<b>"+data[index].nama +"</b><br>" + data[index].lokasi+"<br> <a href="+data[index].link+" target='_blank'>Lihat di Peta</a>").addTo(map);
   

});
       }); 
    });
    </script>
    @endsection
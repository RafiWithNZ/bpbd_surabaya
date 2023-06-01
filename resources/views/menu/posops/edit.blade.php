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
                        <li class="breadcrumb-item ">Pos Pantau</li>
                        <li class="breadcrumb-item active">Edit</li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="margin-bottom: 30px;">
        <div id="map" style="height: 400px; width:75%; margin:auto;"></div>
        <div class="col-lg-8">
            <form method="post" action="/dashboard/posPantau/{{$pos->id}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="lat" class="form-label">Latitude</label>
                    <input type="text" class="form-control" id="lat" name="lat" value="{{old('lat', $pos->lat)}}">
                    @error('lat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="long" class="form-label">longitude</label>
                    <input type="text" class="form-control" id="long" name="long" value="{{old('lat', $pos->long)}}">
                    @error('long')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pos</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{old('long', $pos->nama)}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi Pos</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi"
                        value="{{old('lokasi', $pos->lokasi)}}">
                    @error('lokasi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link Google Maps</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{old('link', $pos->link)}}">
                    @error('link')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>



                <button type="submit" class="btn btn-primary" onclick="return confirm('Ingin Mengubah Pos Baru ?')">Ubah
                    Pos Pantau</button>
            </form>
        </div>


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


        document.querySelector('#lat').value = e.latlng.lat.toString();
        document.querySelector('#long').value = e.latlng.lng.toString();
        document.querySelector('#link').value = 'https://www.google.com/maps/@'+e.latlng.lat.toString()+','+e.latlng.lng.toString()+',15z';



        
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
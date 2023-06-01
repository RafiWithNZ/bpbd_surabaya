<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Video;
use App\Models\Walikota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('login.index', [
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }

    public function update(Request $request){

        // Validasi input form
        if($request['videobackground'] != null){
            $validatedData = $request->validate([
                'videobackground' => 'required|mimes:mp4,mov,avi,x-m4v,m4v|max:500000'
            ]);
        }elseif($request['fotowalikota'] != null){
            $validatedData = $request->validate([
                'fotowalikota' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);
        }elseif($request['fotowakil'] != null){
            $validatedData = $request->validate([
                'fotowakil' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480'
            ]);
        }

        //save nama walikota dan wakil
        $ketua = Walikota::find("1");
        $ketua->nama = $request['namawalikota'];
        $updated = $ketua->save();

        $wakil = Walikota::find("2");
        $wakil->nama = $request['namawakil'];
        $wakil->save();

        //save gambar walikota
        $gambar = Gambar::find("1");
        if($request['fotowalikota'] != null){

        //hapus gambar yang lama
        $path = public_path('img/' . $gambar->nama_gambar);
        if (file_exists($path)) {
            unlink($path);
        }

        $gambarfile = $request->file('fotowalikota');
        $name_gambar  = 'GP'.date('Ymdhis').'.'.$request->file('fotowalikota')->
            getClientOriginalExtension();
        $gambarfile->move('img/', $name_gambar);
        $gambar->nama_gambar = $name_gambar;
        $gambar->save(); 
        }

        //save gambar wakil walikota
        $gambar2 = Gambar::find("2");
        if($request['fotowakil'] != null){

        //hapus gambar yang lama
        $path = public_path('img/' . $gambar2->nama_gambar);
        if (file_exists($path)) {
            unlink($path);
        }

        $gambarfile = $request->file('fotowakil');
        $name_gambar  = 'GP2'.date('Ymdhis').'.'.$request->file('fotowakil')->
            getClientOriginalExtension();
        $gambarfile->move('img/', $name_gambar);
        $gambar2->nama_gambar = $name_gambar;
        $gambar2->save(); 
        }

        //save video
        $default = "1";
        $video = Video::find($default);
        if($request['videobackground'] != null){

        //hapus video yang lama
        $path = public_path('video/' . $video->nama_video);
        if (file_exists($path)) {
            unlink($path);
        }

        $videofile = $request->file('videobackground');
        $name_video  = 'GP'.date('Ymdhis').'.'.$request->file('videobackground')->
            getClientOriginalExtension();
        $videofile->move('video/', $name_video);
        $video->nama_video = $name_video;
        $video->save(); 
        }

        //cek apakah save ke database telah berhasil
        if ($updated) {
            return redirect()->back()->with('success', 'Data Berhasil Diupdate!!');
        } else {
            return redirect()->back()->with('fail', 'Terjadi kesalahan saat menyimpan file.');
        }

    }


}

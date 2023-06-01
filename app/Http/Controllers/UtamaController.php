<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtamaController extends Controller
{
    //


    public function index()
    {
        return view('menu.utama',[
            'datavideo' => DB::table('video')->where('id', '=', "1")->get(),
            'gambar1' => DB::table('gambar')->where('id', '=', "1")->get(),
            'gambar2' => DB::table('gambar')->where('id', '=', "2")->get(),
            'wali' => DB::table('walikota')->where('id', '=', "1")->get(),
            'wakil' => DB::table('walikota')->where('id', '=', "2")->get()
        ]);
    }
    

}

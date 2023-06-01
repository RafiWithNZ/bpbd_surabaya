<?php

namespace App\Http\Controllers;

use App\Models\Prabencanas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrabencanaController extends Controller
{
    public function index()
    {
        return view('menu.prabencana', [
            'konten' => Prabencanas::orderBy('id', 'asc')->get()
        ]);
    }

    
    public function show (string $id)
    {
        return view('menu.praops.pradetail' , [
            'konten' => Prabencanas::find($id)
    ]);
    }

    public function edit (string $id)
    {
        return view('menu.praops.praedit', [
            'konten' => Prabencanas::find($id)
        ]  );
    }


    public function update($request, string $id)
    {
         // Validasi inputan
         $data = $request->validated();

        if ($request->hasFile('gambarberita')){
            
            $file = $request->file('gambarberita');
            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $data['gambarberita'] = $file->storeAs('/public/storage/photo', $fileName);

            Storage::delete('/public/storage/photo'. $request->oldGambarBerita);
            $data['gambarberita'] = $fileName;
        } else {
            $data['gambarberita'] = $request->oldGambarBerita;
        }

        $data = $request->all();
        Prabencanas::find('id', $id)->update($data);

        return redirect(url('/newsupdate'))->with('success', 'Data Berhasil Diubah');
    }

   
}

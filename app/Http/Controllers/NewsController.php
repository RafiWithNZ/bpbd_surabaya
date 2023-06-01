<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\NewsStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NewsUpdateRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.newsupdate', [
            'newses' => News::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('menu.newsops.newscreate');
    }

    /**
     * Store a newly created  resource in storage.
     */
    public function store(NewsStoreRequest $request)
    {
         // Validasi inputan
        $request->validated();

        $data['judul'] = $request['judul'];
        $data['deskripsi_berita'] = $request['desc'];

        $file = $request->file('gambarberita');
        $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
        $data['gambar_berita'] = $file->storeAs('/public/img', $fileName);
        $data['gambar_berita'] = $fileName;

        News::create($data);

        return redirect(url('/newsupdate'))->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show (string $id)
    {
        return view('menu.newsops.newsshow' , [
            'news' => News::find($id)
    ]);
    }

    /**newsops.
     * Show the form for editing the specified resource.
     */
    public function edit (string $id)
    {
        return view('menu.newsops.newsedit', [
            'news' => News::find($id),
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsUpdateRequest $request, string $id)
    {
         // Validasi inputan
         $data = $request->validated();

        if ($request->hasFile('gambarberita')){
            
            $file = $request->file('gambarberita');
            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $data['gambarberita'] = $file->storeAs('/public/img', $fileName);

            Storage::delete('/public/img'. $request->oldGambarBerita);
            $data['gambarberita'] = $fileName;
        } else {
            $data['gambarberita'] = $request->oldGambarBerita;
        }

        News::where('id', $id)->update($data);

        return redirect(url('/newsupdate'))->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = News::find($id);
        Storage::delete('public/storage/photo'. $data->gambarberita);
        $data->delete();

        return redirect(url('/newsupdate'))->with('success', 'Data Berhasil Dihapus');  
    }
    
}

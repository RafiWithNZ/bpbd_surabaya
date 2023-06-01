<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Models\Jabatan;

class OrganizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('menu.organisasi', [
            'posts' => Organisasi::where('user_id', auth()->user()->id)->get(),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu.orgops.create', [
            'title' => 'tambah Angoota',
            'jabatan' => jabatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate(
            [
                'nama_anggota' => 'required|max:255',
                'slug' => 'required',
                'jabatan_id' => 'required',


            ]


        );
        $validatedData['user_id'] = auth()->user()->id;
        Organisasi::create($validatedData);

        return redirect('/dashboard/organisasi')->with('success', 'Anggota baru telah ditambah !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organisasi $organisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisasi $organisasi)
    {
        //
        return view('menu.orgops.edit', [
            'organisasi' => $organisasi,
            'jabatan' => jabatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisasi $organisasi)
    {
        //

        $rules =
            [
                'nama_anggota' => 'required|max:255',
                'jabatan_id' => 'required',

            ];
        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        Organisasi::where('id', $organisasi->id)->update($validatedData);

        return redirect('/dashboard/organisasi')->with('success', 'Anggota baru telah diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisasi $organisasi)
    {
        //
        Organisasi::destroy($organisasi->id);

        return redirect('/dashboard/organisasi')->with('success', 'Post has been deleted');
    }
}

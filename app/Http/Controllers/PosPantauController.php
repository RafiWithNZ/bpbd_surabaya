<?php

namespace App\Http\Controllers;

use App\Models\PosPantau;
use Illuminate\Http\Request;

class PosPantauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('menu.pospantau', [
            'title' => 'Pos Pantau',
            'pos' => PosPantau::all(),
        ]);
    }

    public function marker()
    {
        $result = PosPantau::all();
        return json_encode($result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view(
            'menu.posops.create',
            [
                'title' => 'Pos Pantau'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validateData = $request->validate(
            [
                'lat' => 'required',
                'long' => 'required',
                'nama' => 'required',
                'lokasi' => 'required',
                'link' => 'required'

            ]
        );


        PosPantau::create($validateData);

        return redirect('/dashboard/posPantau')->with('success', 'Lokasi baru telah ditambah !');
    }

    /**
     * Display the specified resource.
     */
    public function show(PosPantau $posPantau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PosPantau $posPantau)
    {
        //
        return view('menu.posops.edit', [
            'pos' => $posPantau,
            'pospantau' => PosPantau::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PosPantau $posPantau)
    {
        //
        $rules =
            [
                'lat' => 'required',
                'long' => 'required',
                'nama' => 'required',
                'lokasi' => 'required',
                'link' => 'required'
            ];

        $validatedData = $request->validate($rules);



        PosPantau::where('id', $posPantau->id)->update($validatedData);
        return redirect('/dashboard/posPantau')->with('success', 'Lokasi telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PosPantau $posPantau)
    {
        //\

        PosPantau::destroy($posPantau->id);

        return redirect('dashboard/posPantau')->with('success', 'Lokasi telah di hapus !');
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Controller;
use App\Models\Pospantau;
use Illuminate\Http\Request;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('LokasiPos/Pos', [
            'title' => 'BPBD Kota Surabaya',
            'description' => 'Selamat datang website resmi BPBD Kota Surabaya',
            'pospantau' => Pospantau::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PosPantau $posPantau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PosPantau $posPantau)
    {
        //
    }
}

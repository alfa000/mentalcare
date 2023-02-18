<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = new Artikel();
        return view('artikel.form', compact('artikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar_path = "";
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $gambar_path = $file->store("artikel/gambar", 'public');
        }

        Artikel::create([
            'judul'              => $request->judul,
            'gambar'             => $gambar_path,
            'kategori'           => $request->kategori,
            'konten'             => $request->konten,
            'created_by'         => Auth::user()->id,
            'updated_by'         => Auth::user()->id,
        ]);

        return redirect(route('artikel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('artikel.form', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $gambar_path = $artikel->gambar;
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $gambar_path = $file->store("artikel/gambar", 'public');
        }

        $artikel->update([
            'judul'              => $request->judul,
            'gambar'             => $gambar_path,
            'kategori'           => $request->kategori,
            'konten'             => $request->konten,
            'updated_by'         => Auth::user()->id,
        ]);

        return redirect(route('artikel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect(route('artikel.index'));
    }
}

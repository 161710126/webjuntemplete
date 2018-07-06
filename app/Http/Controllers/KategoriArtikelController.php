<?php

namespace App\Http\Controllers;

use App\kategori_artikel;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
 {
    public function index()
    {
         $kartikel =kategori_artikel::all();
        return view('kartikel.index',compact('kartikel')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kartikel.create');     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama_artikel' => 'required|max:255'
             
        ]);
        $kartikel = new kategori_artikel;
        $kartikel->nama_artikel = $request->nama_artikel;
        $kartikel->save();
         return redirect()->route('kategorisartikel.index');     
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kartikel = kategori_artikel::findOrFail($id);
        return view('kartikel.show',compact('kartikel'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartikel = kategori_artikel::findOrFail($id);
        return view('kartikel.edit',compact('kartikel'));     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
             'nama_artikel' => 'required|max:255',
        ]);

        $kartikel = kategori_artikel::findOrFail($id);
        $kartikel->nama_artikel = $request->nama_artikel;
        $kartikel->save();
        return redirect()->route('kategorisartikel.index');       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kartikel = kategori_artikel::findOrFail($id);
        $kartikel->delete();
        return redirect()->route('kategorisartikel.index');    }
}
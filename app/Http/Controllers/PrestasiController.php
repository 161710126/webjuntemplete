<?php

namespace App\Http\Controllers;

use App\prestasi;
use App\eskul;

use Illuminate\Http\Request;

class PrestssiController extends Controller
 {
    public function index()
    {
         $eskuls = prestasi::with('eskul')->get();
        return view('prestasiss.index',compact('prestasis')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eskuls = prestasi::all();
        return view('prestasiss.create',compact('eskuls'));     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama' => 'required|max:255',
             'tanggal_peroleh' => 'required|min:2',
             'deskripsi' => 'required|min:2',
             'eskul_id' => 'required|min:2',
           
        ]);

        $prestasis = new prestasi;
        $prestasis->nama = $request->nama;
        $prestasis->tanggal_peroleh = $request->tanggal_peroleh;
        $prestasis->deskripsi = $request->deskripsi;
        $prestasis->eskul_id = $request->eskul_id;
        $prestasis->save();
        return redirect()->route('prestasis.index');     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasis = prestasi::findOrFail($id);
        return view('prestasiss.show',compact('prestasis'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eskuls = prestasi::all();
         $selectedEskul = prestasi::findOrFail($id)->eskul_id;
        $prestasis = Prestasi::findOrFail($id);
        return view('prestasiss.edit',,compact('eskuls','dokters','selectedEskul'));     }

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
             'nama' => 'required|max:255',
            'poto' => 'required|min:2',
             'kategoriprestasis_id' => 'required|min:2',
            
        ]);

        $prestasis = Prestasi::findOrFail($id);
         $eskuls = prestasi::all();
        $prestasis->nama = $request->nama;
        $prestasis->poto = $request->poto;
        $prestasis->kategoriprestasis_id= $request->content;
        $prestasis->save();
        return redirect()->route('prestasis.index');       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $prestasis = Prestasi::findOrFail($id);
        $prestasis->delete();
        return redirect()->route('prestasis.index');    }
}
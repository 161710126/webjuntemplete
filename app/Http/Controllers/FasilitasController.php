<?php

namespace App\Http\Controllers;

use App\faslitas;

use Illuminate\Http\Request;

class FasilitasController extends Controller
 {
    public function index()
    {
         $fasilitas =fasilitas::all();
        return view('fasilitass.index',compact('fasilitas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitass.create');     }

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
             'poto' => 'required|min:2',
             'kategorifasilitas_id' => 'required|min:2',
           
        ]);

        $fasilitas = new fasilitas;
        $fasilitas->nama = $request->nama;
        $fasilitas->poto = $request->poto;
        $fasilitas->kategorifasilitas_id = $request->kategorifasilitas_id;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = fasilitas::findOrFail($id);
        return view('fasilitass.show',compact('fasilitas'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = fasilitas::findOrFail($id);
        return view('fasilitass.edit',compact('fasilitas'));     }

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
             'kategorifasilitas_id' => 'required|min:2',
            
        ]);

        $fasilitas = fasilitas::findOrFail($id);
        $fasilitas->nama = $request->nama;
        $fasilitas->poto = $request->poto;
        $fasilitas->kategorifasilitas_id= $request->content;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $fasilitas = fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');    }
}
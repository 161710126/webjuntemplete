<?php

namespace App\Http\Controllers;

use App\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
 {
    public function index()
    {
         $gurus =guru::all();
        return view('guru.index',compact('gurus')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');     }

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
            'jabatan' => 'required|min:2',
             'poto' => 'required|min:2',
           
        ]);

        $gurus = new guru;
        $gurus->nama = $request->nama;
        $gurus->jabatan = $request->jabatan;
        $gurus->poto = $request->poto;
        $gurus->save();
        return redirect()->route('gurus.index');     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gurus = guru::findOrFail($id);
        return view('guru.show',compact('gurus'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gurus = guru::findOrFail($id);
        return view('guru.edit',compact('gurus'));     }

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
            'jabatan' => 'required|min:2',
             'poto' => 'required|min:2',
            
        ]);

        $gurus = guru::findOrFail($id);
        $gurus->nama = $request->nama;
        $gurus->jabatan = $request->jabatan;
        $gurus->poto = $request->poto;
        $gurus->save();
        return redirect()->route('gurus.index');       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $gurus = guru::findOrFail($id);
        $gurus->delete();
        return redirect()->route('gurus.index');    }
}
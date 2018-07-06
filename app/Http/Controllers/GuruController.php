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
                if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'assets/img/imagess/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $gurus->poto= $filename;
        }

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
          // edit upload poto
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/imagess/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($gurus->poto) {
        $old_poto = $gurus->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/imagess'
        . DIRECTORY_SEPARATOR . $gurus->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $gurus->poto = $filename;
}
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
          if ($gurus->foto) {
            $old_foto = $gurus->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/imagess/'
            . DIRECTORY_SEPARATOR . $gurus->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $gurus->delete();
        return redirect()->route('gurus.index');    }
}
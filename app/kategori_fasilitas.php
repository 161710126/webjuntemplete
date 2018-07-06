<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_fasilitas extends Model

     {
   protected $table = 'kategori_fasilitas'; 
    protected $fillable = ['nama_fasilitas']; 
    public $timestamps = true; 

    public function fasilitas()
    {
    	return $this->hasMany('App\fasilitas','kategorifasilitas_id');
    }
}


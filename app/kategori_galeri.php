<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_galeri extends Model
{
   protected $table = 'kategori_galeris'; 
    protected $fillable = ['nama_galeri']; 
    public $timestamps = true; 

    public function galeri()
    {
    	return $this->hasMany('App\galeri','kategorigaleri_id');
    }
}

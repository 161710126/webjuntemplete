<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_artikel extends Model

    {
   protected $table = 'kategori_artikels'; 
    protected $fillable = ['nama_artikel']; 
    public $timestamps = true; 

    public function artikel()
    {
    	return $this->hasMany('App\artikel','kategoriartikel_id');
    }
}


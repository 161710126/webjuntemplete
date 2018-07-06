<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model

   {
      protected $table = 'galeris';
     protected $fillable = ['poto','kategorigaleri_id'];
     public $timestamps = true;

	public function kategori_galeri()
	{
		return $this->belongsTo('App\kategori_galeri','kategorigaleri_id');
	}

}

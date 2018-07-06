<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model

    {
      protected $table = 'artikels';
     protected $fillable = ['judul','poto','deskripsi','kategoriartikel_id'];
     public $timestamps = true;

	public function kategori_artikel()
	{
		return $this->belongsTo('App\kategori_artikel','kategoriartikel_id');
	}

}
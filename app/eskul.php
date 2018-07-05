<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
   protected $table = 'eskuls'; 
    protected $fillable = ['nama','poto','content']; 
    public $timestamps = true; 

    public function prestasi()
    {
    	return $this->hasMany('App\prestasi','eskul_id');
    }
}


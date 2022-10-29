<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    use HasFactory;
    protected $table='produk';


    public function pesanan_detail() 
    {
         return $this->hasMany('App\Models\PesananDetail','produk_id', 'id');
    }
}
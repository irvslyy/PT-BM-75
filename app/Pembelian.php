<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelianmaterial';
    protected $fillable = [
        'project',
        'toko_name',
        'goods_name',
        'buying_date',
        'price',
    ];
    public function material()
    {
       return $this->belongsTo(Material::class);
    }
}




<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';
    protected $fillable = [
        'project',
        'buying_date',
        'price',
    ];
    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
}






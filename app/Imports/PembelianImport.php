<?php

namespace App\Imports;

use App\Pembelian;
use Maatwebsite\Excel\Concerns\ToModel;

class PembelianImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pembelian([
            'project' => $row[0],
            'toko_name' => $row[1],
            'goods_name' => $row[2],
            'buying_date' => $row[3],
            'price' => $row[4],
        ]);
    }
}

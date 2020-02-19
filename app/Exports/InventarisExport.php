<?php

namespace App\Exports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class InventarisExport implements FromCollection,  WithHeadings
// class UsersExport implements FromCollection, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inventory::all();
    }
    public function headings(): array
    {
        return [
            'no',
            'nama_stok',
            'kode_stok',
            'jumlah_stock',
            'keterangan_stock',
            'Created at',
            'Updated at'
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert(array(
            [
                'nama_supplier'=>'Ifa Indrian',
                'jenis'=>'Agen',
                'address'=>'Jombang',
                'contact'=>'ifaindrian@gmail.com'
            ],
            [
                'nama_supplier'=>'Irma Maulidia',
                'jenis'=>'Vendor',
                'address'=>'Pasuruan',
                'contact'=>'irmamaulidiaaa@gmail.com'
            ],
            [
                'nama_supplier'=>'Putra Ramadhan',
                'jenis'=>'Vendor',
                'address'=>'Surabaya',
                'contact'=>'putra123@gmail.com'
            ],
            [
                'nama_supplier'=>'Ameena Anggita',
                'jenis'=>'Distributor',
                'address'=>'Bandung',
                'contact'=>'ameena567@gmail.com'
            ],
            [
                'nama_supplier'=>'Marcus Fernaldi',
                'jenis'=>'Importir',
                'address'=>'Probolinggo',
                'contact'=>'marcusfernaldi@gmail.com'
            ],
            [
                'nama_supplier'=>'Anthony Sinisuka',
                'jenis'=>'Agen',
                'address'=>'Palu',
                'contact'=>'anthonysinisuka@gmail.com'
            ]
        ));
    }
}

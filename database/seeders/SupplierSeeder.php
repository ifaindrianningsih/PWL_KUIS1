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
        DB::table('suppliers')->insert(array(
            [
                'nama_supplier' => 'Ifa Indrian',
                'jenis' => 'Agen',
                'addres' => 'Jombang',
                'contact' => 'ifaindrian@gmail.com',
                'phone' => '086794532678',
            ],
            [
                'nama_supplier' => 'Irma Maulidia',
                'Jenis' => 'Vendor',
                'addres' => 'Pasuruan',
                'contact' => 'irmamaulidiaaa@gmail.com',
                'phone' => '082332597103',
            ],
            [
                'nama_supplier' => 'Putra Ramadhan',
                'jenis' => 'Vendor',
                'addres' => 'Surabaya',
                'contact' => 'putra123@gmail.com',
                'phone' => '085673281920',
            ],
            [
                'nama_supplier' => 'Ameena Anggita',
                'jenis' => 'Distributor',
                'addres' => 'Bandung',
                'contact' => 'ameena567@gmail.com',
                'phone' => '082341657890',
            ],
            [
                'nama_supplier' => 'Marcus Fernaldi',
                'jenis' => 'Importir',
                'addres' => 'Probolinggo',
                'contact' => 'marcusfernaldi@gmail.com',
                'phone' => '081234567287',
            ],
            [
                'nama_supplier' => 'Anthony Sinisuka',
                'jenis' => 'Agen',
                'addres' => 'Palu',
                'contact' => 'anthonysinisuka@gmail.com',
                'phone' => '089765438290',
            ]
            ));
            //
    }
}
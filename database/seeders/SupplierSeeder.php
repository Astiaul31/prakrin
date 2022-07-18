<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = [
            [
                'nama_supplier' => 'Hanzzt',
                'no_telp' => '0889000068',
                'alamat' => 'Kp. Cilebak' 
            ],
            [
                'nama_supplier' => 'Alfian',
                'no_telp' => '0812000600',
                'alamat' => 'Kp. Bojong Kukun' 
            ],
            [
                'nama_supplier' => 'Dida',
                'no_telp' => '08332326333',
                'alamat' => 'Kp. Bojong Koneng' 
            ],
            [
                'nama_supplier' => 'Rizki Ndut',
                'no_telp' => '08434865655',
                'alamat' => 'Kp. Bojong Sayang' 
            ],
            [
                'nama_supplier' => 'Herdy',
                'no_telp' => '08567837445',
                'alamat' => 'Kp. Leuwidulang' 
            ],
        ];
        DB::table('suppliers')->insert($supplier);
    }
}
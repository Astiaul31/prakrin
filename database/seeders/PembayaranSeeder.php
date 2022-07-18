<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembayaran = [
            [
                'tgl_bayar' => '2022-07-12',
                'total_bayar' => 2500000,
                'kode_transaksi' => 'e1432451254' 
            ],
            [
                'tgl_bayar' => '2022-02-10',
                'total_bayar' => 320000,
                'kode_transaksi' => 'a76281762839' 
            ],
            [
                'tgl_bayar' => '2022-05-09',
                'total_bayar' => 123000,
                'kode_transaksi' => 'b82787487545' 
            ],
            [
                'tgl_bayar' => '2022-11-11',
                'total_bayar' => 320000,
                'kode_transaksi' => 'c16567527654' 
            ],
            [
                'tgl_bayar' => '2022-06-22',
                'total_bayar' => 125000,
                'kode_transaksi' => 'y767875875955' 
            ],
        ];
        DB::table('pembayarans')->insert($pembayaran);
    }
}
<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            [
                'nama_pembeli' => 'Dida',
                'jk' => 'Laki-laki',
                'no_telp' => '086454554',
                'alamat' => 'Desa Rancamayar'
            ],
            [
                'nama_pembeli' => 'Gilang',
                'jk' => 'Laki-laki',
                'no_telp' => '081212213',
                'alamat' => 'Desa Rancakasiat'
            ],
            [
                'nama_pembeli' => 'Nana',
                'jk' => 'Perempuan',
                'no_telp' => '084324234',
                'alamat' => 'Desa Keren'
            ],
            [
                'nama_pembeli' => 'Alfian',
                'jk' => 'Laki-laki',
                'no_telp' => '086454533',
                'alamat' => 'Desa Ahai'
            ],
            [
                'nama_pembeli' => 'Haha',
                'jk' => 'Perempuan',
                'no_telp' => '087987978',
                'alamat' => 'Desa Ahoi'
            ],
        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
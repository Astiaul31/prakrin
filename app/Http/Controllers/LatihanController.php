<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function perkenalan() {
        $nama = "Gilangfdll";
        $alamat = "SAYATI PRIDE";
        $umur = "17";

        return view('pages.perkenalan' , compact('nama', 'alamat', 'umur'));
    }
    public function perkenalan2($nama = "-", $alamat = "-", $umur = "-"){
        $nama = $nama;
        $alamat = $alamat;
        $umur = $umur;

        return view('pages.perkenalan' , compact('nama', 'alamat', 'umur'));
    }
    public function siswa()
        {
            $a = [
                array('id' => 1, 'name' => 'Gilang', 'age' => 15, 'hobi' => [
                    'mancing', 'futsal', 'renang'
                ]),
                array('id'=> 2, 'name' => 'dudung', 'age' => 18, 'hobi' => [
                    'Baca Buku', 'Bernyanyi'
                ]),
            ];
            //dd($a);
            return view('pages.siswa', ['siswa' => $a]);
        }

        public function kampus() {
        $dosen = [
        [
            'name' => 'Yusuf Bachtiar', 'mata_kuliah' => 'Pemrograman Mobile', 'mahasiswa' =>
            [
                [
                    'name' => 'Adrian',
                    'nilai' => 78
                ],
                [
                    'name' => 'Gilang Fadil',
                    'nilai' => 85
                ],
                [
                    'name' => 'Fadil Syabani',
                    'nilai' => 90
                ]
            ],
            [
                'name' => 'Yaris Riyadi', 'mata_kuliah' => 'Pemrograman Web', 'mahasiswa' =>
                [
                    [
                        'name' => 'Alfred McTominay',
                        'nilai' => 67
                    ],
                    [
                        'name' => 'Bruno Kasmir',
                        'nilai' => 90
                    ]
                ]
            ]
        ]
    ];
// dd($dosen);
return view('pages.kampus', ['kampus' => $dosen]);

 }
 public function tv() {
    $tv = [
        ['channel' => 'NET TV', 'acara' => 'Talk Show', 'jam' => '19.30'],
        ['channel' => 'Indosiar', 'acara' => 'Pintu Berkah', 'jam' => '15.00'],
        ['channel' => 'RCTI', 'acara' => 'Ikatan Cinta', 'jam' => '17.30'],
        ['channel' => 'TV One', 'acara' => 'Berita-Beita', 'jam' => '09.00'],
        ['channel' => 'BEINSPORT', 'acara' => 'Olahraga', 'jam' => '20.00']
    ];
    $tgl = "13 JULI 2022";
    //dd($tv);
return view('pages.televisi', compact('tv' ,'tgl'));
     
 }
 public function belanja() {
    $belanja = [
        [
            'name' => 'Gilang',
            'belanja' => [
                ['produk' => 'sepatu', 'harga' => 250000],
                ['produk' => 'kameja', 'harga' => 100000],
                ['produk' => 'topi', 'harga' => 100000],
                ['produk' => 'levis', 'harga' => 150000]
            ]
            ],
            [
                'name' => 'Fadil',
                'belanja' => [
                ['produk' => 'kaos', 'harga' => 100000],
                ['produk' => 'celana', 'harga' => 125000],
                ['produk' => 'jaket', 'harga' => 150000]
            ]
        ]
    ];
    //dd($belanja);
    return view('pages.belanja', ['belanja' => $belanja]);
 }
 function nilai_siswa(){
    $siswa = 
    [
        ['nama_siswa' => 'RSeven', 'jurusan' => 'TKR' ,
        'nilai' =>
        [
            ['matpel' => 'B.INDONESIA', 'nilai' => 80],
            ['matpel' => 'B.INGGRIS', 'nilai' => 97],
            ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 67],
            ['matpel' => 'MATEMATIKA', 'nilai' => 100]
        ]
        ],
        ['nama_siswa' => 'Clayyy', 'jurusan' => 'TKR' ,
        'nilai' =>
        [
            ['matpel' => 'B.INDONESIA', 'nilai' => 78],
            ['matpel' => 'B.INGGRIS', 'nilai' => 86],
            ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 90],
            ['matpel' => 'MATEMATIKA', 'nilai' => 67]
        ]
        ],
        ['nama_siswa' => 'Vynnn',  'jurusan' => 'TSM' ,
        'nilai' =>
        [
            ['matpel' => 'B.INDONESIA', 'nilai' => 90],
            ['matpel' => 'B.INGGRIS', 'nilai' => 50],
            ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 65],
            ['matpel' => 'MATEMATIKA', 'nilai' => 78]
        ]
        ],
        ['nama_siswa' => 'Alberttt',  'jurusan' => 'RPL' ,
        'nilai' =>
        [
            ['matpel' => 'B.INDONESIA', 'nilai' => 78],
            ['matpel' => 'B.INGGRIS', 'nilai' => 90],
            ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 56],
            ['matpel' => 'MATEMATIKA', 'nilai' => 78]
        ]
        ],
        ['nama_siswa' => 'Xinnn',  'jurusan' => 'RPL' ,
        'nilai' =>
        [
            ['matpel' => 'B.INDONESIA', 'nilai' => 89],
            ['matpel' => 'B.INGGRIS', 'nilai' => 67],
            ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 80],
            ['matpel' => 'MATEMATIKA', 'nilai' => 90]
        ]
        ]
    ];
    return view('pages.siswa2', ['siswa'=>$siswa]);
}
}
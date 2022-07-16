<?php

function belanja() {
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
    $total = 0;
    foreach ($belanja as $beli) {
        echo "Nama : ". $beli['name']. "<br />";
        echo "Belanjaan : <br />";
        foreach ($beli['belanja'] as $barang) {
            echo $barang['produk']. " = Rp" .$barang['harga']. "<br />";

            $total += $barang['harga'];

        }

        echo "Total Harga Belanja : Rp".$total. "<br />";

        if ($total > 500000) {
            $cashback = 0.10;
            echo "Cashback : Rp". $total * $cashback ." (10%) <br />";
        }
        elseif ($total > 250000) {
            $cashback = 0.5;
            echo "Cashback : Rp". $total * $cashback ." (5%) <br />";
    }

    echo "<hr />";
}
}
return belanja();
?>
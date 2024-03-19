<?php

function tampilkanHaloDunia()
{
    echo "Halo dunia! <br>";

    // tampilkanHaloDunia();
}

tampilkanHaloDunia();

echo "<br>";

for ($i = 1; $i <= 25; $i++) {
    echo "Perulangan ke-{$i} <br>";
}

echo "<br>";

function tampilkanAngka(int $jumlah, int $indeks = 1)
{
    echo "Perluangan ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);

echo "<br>";

$menu = [
    [
        'nama' => "Beranda"
    ],
    [
        'nama' => "Berita",
        "subMenu" => [
            [
                'nama' => "Wisata",
                'subMenu' => [
                    [
                        'nama' => "Pantai"
                    ],
                    [
                        'nama' => "Gunung"
                    ]
                ]
            ],
            [
                'nama' => "Kuliner"
            ],
            [
                'nama' => "Hiburan"
            ]
        ]
    ],
    [
        'nama' => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);

echo "<br>";

function tampilkanMenuBertingkat_2(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li>{$item['nama']}</li>";
        
        if (array_key_exists("subMenu", $item)) {
            tampilkanMenuBertingkat_2($item['subMenu']);
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat_2($menu);
<?php 

function getPeta() 
{
    $peta = [
        '1' => 
        [
            'id' => '1',
            'nama' => 'Peta Umum Bandung Barat',
            'generate' => 'assets/peta_umum/bandung_barat/js/peta_umum_bandung_barat.js',
            'data' => 'assets/peta_umum/bandung_barat/data/bandung_barat.js',
        ],
        '2' => 
        [
            'nama' => 'Peta Umum Purwakarta',
            'generate' => 'assets/peta_umum/purwakarta/js/peta_umum_purwakarta.js',
            'data' => 'assets/peta_umum/purwakarta/data/purwakarta.js',
        ],
        '3' => 
        [
            'nama' => 'Peta Khusus 1',
            'generate' => 'assets/peta_khusus/bandung_barat/js/peta_khusus_bandung_barat.js',
            'data' => 'assets/peta_khusus/bandung_barat/data/bandung_barat.js',
        ],
        '4' => 
        [
            'nama' => 'Peta Khusus 2',
            'generate' => '',
            'data' => 'peta_umum',
        ],
    ];

    return $peta;
}

?>
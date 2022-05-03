<?php 

function getPeta() 
{
    $peta = [
        '1' => 
        [
            'id' => '1',
            'nama' => 'Peta Umum Perubahan Lahan Bandung Barat',
            'generate' => 'assets/peta_umum/bandung_barat/js/peta_umum_bandung_barat.js',
            'data' => 'assets/peta_umum/bandung_barat/data/bandung_barat.js',
        ],
        '2' => 
        [
            'nama' => 'Peta Umum Perubahan Lahan Purwakarta',
            'generate' => 'assets/peta_umum/purwakarta/js/peta_umum_purwakarta.js',
            'data' => 'assets/peta_umum/purwakarta/data/purwakarta.js',
        ],
        '3' => 
        [
            'nama' => 'Peta Khusus Perubahan Lahan Bandung Barat',
            'generate' => 'assets/peta_khusus/bandung_barat/js/peta_khusus_bandung_barat.js',
            'data' => 'assets/peta_khusus/bandung_barat/data/bandung_barat.js',
        ],
        '4' => 
        [
            'nama' => 'Peta Khusus Perubahan Lahan Purwakarta',
            'generate' => 'assets/peta_khusus/purwakarta/js/peta_khusus_purwakarta.js',
            'data' => 'assets/peta_khusus/purwakarta/data/purwakarta.js',
        ],
        '5' => 
        [
            'nama' => 'Peta Klasifikasi Tutupan Lahan 2021 Sentinel-2 Lokus Bandung Barat',
            'generate' => 'assets/peta_klasifikasi/bandung_barat/js/peta_klasifikasi_bandung_barat.js',
            'data' => 'assets/peta_klasifikasi/bandung_barat/data/bandung_barat.js',
        ],
        '6' => 
        [
            'nama' => 'Peta Klasifikasi Tutupan Lahan 2021 Sentinel-2 Lokus Purwakarta',
            'generate' => 'assets/peta_klasifikasi/purwakarta/js/peta_klasifikasi_purwakarta.js',
            'data' => 'assets/peta_klasifikasi/purwakarta/data/purwakarta.js',
        ]
    ];

    return $peta;
}

?>
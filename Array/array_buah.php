<?php
    //deklarasi array
    $array_buah = ['Manggis', 'Kelapa', 'Rambutan', 'Duku'];

    //menampilkan array
    echo 'Jumlah data array 0 => '.$array_buah[0]. '<br>';

    //menampilkan jumlah array
    echo 'Menampilkan semua jumlah data array => '.count($array_buah).'<br>';

    echo '<hr>';
    //menampilkan array pakai foreach
    foreach ($array_buah as $key => $value) {
        echo 'Menambahkan data array ke-' .$key.' => '.$value.'<br>';
    }
    echo '<hr>';

    //menampilkan array dengan list
    echo '<ol>';
    foreach ($array_buah as $value) {
        echo '<li>'.$value.'</li>';
    }
    echo '</ol>';

?>
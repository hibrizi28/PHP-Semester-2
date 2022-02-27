<?php
    //array buah
    $array_buah = [
        'n' => 'Nanas',
        'j' => 'Jambu',
        'd' => 'Duku',
        'r' => 'Rambutan',
    ];

    //menampilkan array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'.$key .' - '.$value.'<li>';
    }
    echo '</ol>';

    echo '<hr>';
    echo 'Menampilkan dengan sort array';
    sort($array_buah);

    //Menampilkan array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'.$key.' - '.$value.'</li>';
    }
    echo '</ol>';
?>

fungsi dari sort array adalah untuk memudahkan atau menyederhanakan dengan mudah tanpa bertele tele seperti di perpendek .
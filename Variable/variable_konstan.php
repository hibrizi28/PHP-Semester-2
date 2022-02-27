<?php

//Definisikan konstanta
define('PHI', 3.14);
define('DBNAME', 'db_mahasiswa');
define('DBSERVER', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'rizi');

//deklarasi variabel
$jari = 14;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

//hasil
echo 'Luas Lingkaran : ' . $luas. '<br>';
echo 'Keliling Lingkaran :' .$keliling;

echo '<hr>';

//menampilkan konstanta 
echo 'Nama Database : ' .DBNAME.'<br>';
echo 'Server Database : ' .DBSERVER.'<br>';
echo 'Nama User Database : ' .DBUSER.'<br>';
echo 'Password Database : ' .DBPASS.'<br>';

?>
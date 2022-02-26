<?php 
    // Variabel User
    $nama = 'Aliya';
    $umur = 18;
    $berat = 55;

    $nama = 'Aliya';

    echo 'Nama saya '.$nama.' Umur saya '.$umur. ' Berat saya '.$berat;
    echo "<br />";
    echo "<h1 style='color: red'>Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
    echo "<br />";

    // Variable Sistem
    // Variabel built in PHP
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";

    // Variabel Konstan
    // adalah variabel yang tidak bisa diubah nilainya
    define('makanan', 'sushi');
    // define('makanan', 'jambu');
    echo '<h1 style="color: blue">'.makanan.'</h1>';
    echo makanan;
?> 
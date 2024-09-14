<?php
    $nilai_A="4";
    $nilai_B="6";

    $hasil_penambahan=$nilai_A+$nilai_B;
    $hasil_pengurangan=$nilai_A-$nilai_B;
    $hasil_perkalian=$nilai_A*$nilai_B;
    $hasil_pembagian=$nilai_A/$nilai_B;

    echo "<h3>Ini Adalah Aplikasi Kalkulator Sederhana</h3><hr>";
    echo "<b>Nilai Awal A dan B : </b><br>";
    echo "Nilai A : ".$nilai_A."<br>";
    echo "Nilai A : ".$nilai_B."<br><hr>";

    echo "<b>1. Penambahan</b><br>";
    echo "Hasil A + B = ".$hasil_penambahan."<br><hr>";

    echo "<b>2. Penambahan</b><br>";
    echo "Hasil A - B = ".$hasil_pengurangan."<br><hr>";

    echo "<b>3. Penambahan</b><br>";
    echo "Hasil A * B = ".$hasil_perkalian."<br><hr>";

    echo "<b>4. Penambahan</b><br>";
    echo "Hasil A / B = ".$hasil_pembagian."<br><hr>";
?>
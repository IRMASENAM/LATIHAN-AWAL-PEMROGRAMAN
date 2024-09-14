<?php
    /*
    Ini Adalah algoritma program
    untuk menukarkan dua buah nilai
    */

    echo "<h3>Algoritma Program Tukar Nilai 2 Variabel</h3><hr>";

    //nilai variabel ke-1
    $var_a= 10;

    //nilai variabel ke-2
    $var_b= 15;

    //menampilkan nilai kedua variabel sebelum 
    //pertukaran
    echo "<b>Nilai Variabel Sebelum Pertukaran :</b><br>";
    echo "Variabel A : $var_a<br>";
    echo "Variabel B : $var_b<hr>";
   
    //proses pertukaran
    $var_c = $var_a;
    $var_a = $var_b;
    $var_b = $var_c;

    //menampilkan nilai kedua variabel
    //setelah pertukaran
    echo "<b>Nilai Variabel Setelah Pertukaran :</b><br>";
    echo "Variabel A : $var_a<br>";
    echo "Variabel B : $var_b<hr>";
?>
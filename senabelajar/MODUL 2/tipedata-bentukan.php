<?php
    //ini contoh array dengan tipe homogen
    $larik=array("satu","dua","tiga","empat");

    //ini contoh array dengan tipe heterogen
    $data=array(
        5,"enam",7.5,"delapan"
    );

    echo "<h3><b>Ini contoh array dengan tipe homogen</b></h3><hr>";
    echo "larik[0] = $larik[0]<br>";
    echo "larik[1] = $larik[1]<br>";
    echo "larik[2] = $larik[2]<br>";
    echo "larik[3] = $larik[3]<br>";

    echo "<p><b>Struktu Array Larik:</b>";
    echo "<pre>";
    print_r($larik);
    echo "</pre>";
    echo "</p>";
    echo "<hr>";

    echo "<h3><b>Ini contoh array dengan tipe heterogen</b></h3><hr>";
    echo "data[0] = $data[0]<br>";
    echo "data[1] = $data[1]<br>";
    echo "data[2] = $data[2]<br>";
    echo "data[3] = $data[3]<br>";

    echo "<p><b>Struktu Array Data:</b>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "</p>";
    echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>APLIKASI HITUNG LUAS SEGITIGA</title>
    </head>
    <body>
        <form method="POST">
            <p><h3>APLIKASI HITUNG LUAS SEGITIGA</h3></p><hr>
            <p>
                <label>
                    Masukkan Alas : <br>
                    <input type="number" name="alas" onclick="this.select()"><br>
                    Masukkan Tinggi : <br>
                    <input type="angka" name="tinggi" onclick="this.select()"><br>
                </label><hr>
            </p>
            <p>
                <input type="submit" name="hitung" value="Hitung Luas">
            </p>
            <p>
                <b><h4>HASIL : </h4></b>
            </p>
        </form>
        <?php
            if (isset($_POST['hitung'])){
                $alas=(float)$_POST['alas'];
                $tinggi=(float)$_POST['tinggi'];

                $luas = 0.5*$alas*$tinggi;
                echo "LUAS SEGITIGA DENGAN ALAS ".$alas." dan ".$tinggi." adalah ".$luas."<br>";

            }
        ?>
    </body>
</html>
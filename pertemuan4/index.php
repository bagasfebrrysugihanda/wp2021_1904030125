<!DOCTYPE html>
<html>
    <head>
        <title>Pertemuan 4</title>
        <h1>Membuat Array</h1>
        <?php
        $values = array(1,2,3,5,8);
        var_dump($values);
        echo("<br>");
        echo($values[0]);
        echo("<br>");
        echo($values[1]);
        echo("<br>");

        $warna = ["Merah","Kuning","Hijau","Jingga"];
        var_dump($warna);
        echo("<br>");
        echo "$warna[3]";
        echo("<br>");

        // mengganti isi value
        $warna[0] = "Ungu";
        var_dump($warna);
        echo("<br>");

        // menambahkan value
        $warna[] = "Nila";
        var_dump($warna);
        echo("<br>");

        // menghilangkan/menghapus salah satu value
        unset($warna[2]);
        var_dump($warna);
        echo("<br>");

        // menghitung jumlah dalam array
        echo("<br>");
        var_dump(count($warna));

        ?>
<hr>
        <h1>Map Dengan Array</h1>
        <?php

        $bagas = array(
           "id" => "Bagas",
           "nama" => "Bagas Febrry Sugihanda",
           "umur" => "19"
            );
        var_dump($bagas);
        echo("<br>");
        $noel = [
            "id" => "Noel",
           "nama" => "Noel Valdigard",
           "umur" => "20"

            ];
        var_dump($noel);
        echo("<br>");
        echo("Nama Panggilan : " . $noel["id"]);
        echo("<br>");
        echo("Nama Lengkap : " . $noel["nama"]);
        echo("<br>");
        echo("Umur : " . $noel["umur"]);

        ?>
<hr>
        <h1>Operator Matematika</h1>
        <?php
        $tambah = 1 + 1;
        $kurang = 2 - 1;
        $kali = 3 * 6;
        $bagi = 40 / 2;
        $modular = 300 % 33;
        $pangkat = 5 ** 4;
        echo"Tambah : " . $tambah . "<br>";
        echo"kurang : " . $kurang . "<br>";
        echo"kali : " . $kali . "<br>";
        echo"bagi : " . $bagi . "<br>";
        echo"modular : " . $modular . "<br>";
        echo"pangkat : " . $pangkat . "<br>";

        ?>
<hr>

        <h2>Increment</h2>
        <?php
        $a = 20;
        $a++;
        $a++;
        echo($a);
        echo("<br>");

        $b = 9;
        $b--;
        $b--;
        echo($b);
        ?>
    </head>
    <body>

    </body>
</html>


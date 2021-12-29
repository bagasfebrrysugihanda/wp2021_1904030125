<!DOCTYPE html>
<html>
    <head>
        <title>Tugas UTS</title>
        <h1>Biodata</h1>
        <?php

            $bagas = array(
                "id" => "Bagas",
                "nama" => "Bagas Febrry Sugihanda",
                "umur" => "19",
                "tanggal" => "11 Febuary 2002",
                "alamat" => "Tangerang, Pasar kemis, Kp.Ketos, Sindang sari",
                "hobi" => "Membaca Novel fantasy",
                "jurusan" => "Teknik Informatika",
                "hp" => "081213425643",
                        );
                var_dump($bagas);
                echo("<br>");
            
                echo("Nama Panggilan : " . $bagas["id"]);
                echo("<br>");
                echo("Nama Lengkap : " . $bagas["nama"]);
                echo("<br>");
                echo("Umur : " . $bagas["umur"]);
                echo("<br>");
                echo("Tanggal Lahir: " . $bagas["tanggal"]);
                echo("<br>");
                echo("Alamat : " . $bagas["alamat"]);
                echo("<br>");
                echo("Hobi : " . $bagas["hobi"]);
                echo("<br>");
                echo("Jurusan : " . $bagas["jurusan"]);
                echo("<br>");
                echo("No Hp : " . $bagas["hp"]);

        ?>

    </head>
        <body>

        </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Tugas UTS</title>
        <h1>Biodata</h1>
        <?php

            $regina = array(
                "id" => "Regina",
                "nama" => "Regina ",
                "umur" => "22",
                "tanggal" => "1 January 1999",
                "alamat" => "Tangerang",
                "hobi" => "Main bola",
                "jurusan" => "Teknik Informatika",
                "hp" => "08126373838",
                        );
                var_dump($regina);
                echo("<br>");
            
                echo("Nama Panggilan : " . $regina["id"]);
                echo("<br>");
                echo("Nama Lengkap : " . $regina["nama"]);
                echo("<br>");
                echo("Umur : " . $regina["umur"]);
                echo("<br>");
                echo("Tanggal Lahir: " . $regina["tanggal"]);
                echo("<br>");
                echo("Alamat : " . $regina["alamat"]);
                echo("<br>");
                echo("Hobi : " . $regina["hobi"]);
                echo("<br>");
                echo("Jurusan : " . $regina["jurusan"]);
                echo("<br>");
                echo("No Hp : " . $regina["hp"]);

        ?>

    </head>
        <body>

        </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Tugas UTS</title>
        <h1>Map Array</h1>
        <h2>Biodata</h3>
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
                /*var_dump($bagas);*/
            
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

        <hr></hr>

        <h1>Array Multidimensional</h1>
        <?php

$mahasiswas = [     
                [   'nama' => 'Bagas Febrry Sugihanda',         
                    'alamat' => 'Tangerang, Pasar kemis, Kp.Ketos, Sindang sari',         
                    'tanggal_lahir' => '11 Febuary 2002',
                    'hobi' => 'Baca Novel',         
                    'umur' => 19 
                ],     
                    [         
                        'nama' => 'Galih',         
                        'alamat' => 'Tangerang',         
                        'tanggal_lahir' => '28 Oktober 2008',
                        'hobi' => "Gadged",         
                        'umur' => 13,     ], 
                ];


                foreach ($mahasiswas as $mahasiswa){     
                    echo "Nama: ".$mahasiswa['nama']."
                    ";
                    echo("<br>");     
                    echo "Alamat: ".$mahasiswa['alamat']."
                    ";
                    echo("<br>");     
                    echo "Tanggal Lahir: ".$mahasiswa['tanggal_lahir']."
                    ";
                    echo("<br>");     
                    echo "Umur: ".$mahasiswa['umur']."
                    ";
                    echo("<br>");
                    echo "Hobi: ".$mahasiswa['hobi']."
                    ";
                    echo("<br>");
                    echo("<br>");
                                                }
                    

        ?>

<hr></hr>

<h1>Else if</h1>
        <h2> Paket kursus </h2>
        <?php
            echo("Paket Kursus anda dengan kode 301 :   ");
            $nilai = 301;
                if ($nilai == 301): 
	                echo 'Paket anda Microsoft Office & biaya 450000';
                elseif ($nilai == 302):
	                echo 'Paket anda Visual Basic & biaya 450000';
                elseif ($nilai == 303):
	                echo 'Paket anda Visual Foxpro & biaya 400000';
                else:
	                echo 'Tidak ada';
                endif;

        ?>
<h2></h2>
    <?php
            echo("Paket Kursus anda dengan kode 302 :   ");
            $nilai = 302;
                if ($nilai == 301): 
	                echo 'Paket anda Microsoft Office & biaya 450000';
                elseif ($nilai == 302):
	                echo 'Paket anda Visual Basic & biaya 450000';
                elseif ($nilai == 303):
	                echo 'Paket anda Visual Foxpro & biaya 400000';
                else:
	                echo 'Tidak ada';
                endif;

        ?>

<h2></h2>
    <?php
            echo("Paket Kursus anda dengan kode 303 :   ");
            $nilai = 303;
                if ($nilai == 301): 
	                echo 'Paket anda Microsoft Office & biaya 450000';
                elseif ($nilai == 302):
	                echo 'Paket anda Visual Basic & biaya 450000';
                elseif ($nilai == 303):
	                echo 'Paket anda Visual Foxpro & biaya 400000';
                else:
	                echo 'Tidak ada';
                endif;

        ?>

    </head>
        <body>

        </body>
</html>
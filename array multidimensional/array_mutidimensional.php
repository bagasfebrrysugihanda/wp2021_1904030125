<!DOCTYPE html>
<html>
    <head>
        <title>Tugas UTS</title>
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
                                                }
                    

        ?>

</head>
    <body>

    </body>
</html>
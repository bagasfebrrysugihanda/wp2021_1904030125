<!DOCTYPE html>
<html>
    <head>
        <title>Tugas UTS</title>
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
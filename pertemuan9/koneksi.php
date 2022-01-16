<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'wpsmt5';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs');

//AMBIL data dari tabel calon mhs
// mysqli_fetch_row(); mengembalikan dalam dalam betuk numerik
// mysqli_fetch_assoc(); mengembalikan dalam dalam nama field
// mysqli_fetch_array(); mengembalikan dalam dalam bentuk numerik dan nama field

// while ($camaba = mysqli_fetch_row($result)) {
//   var_dump($camaba);
// }

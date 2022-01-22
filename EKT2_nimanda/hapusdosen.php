<?php
include_once("koneksi.php");

$id = $_GET('id');

$query = "DELETE from dosen WHERE dosen=$id";

$hasil = mysqli_query($conn, $query);

if ($hasil); {
  header('location:detailds.php');
}

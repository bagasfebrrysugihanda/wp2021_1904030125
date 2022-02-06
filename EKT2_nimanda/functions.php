<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

// pemanggil tabel
function query($query)
{
  global $conn;

  //pemanggil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM dosen WHERE id= $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM dosen WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

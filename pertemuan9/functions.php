<?php
$conn = mysqli_connect('localhost', 'root', 'wpsmt5');

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

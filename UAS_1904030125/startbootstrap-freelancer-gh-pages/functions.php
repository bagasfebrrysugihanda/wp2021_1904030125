<?php

$conn = mysqli_connect('localhost', 'root', '', 'databarang');

//pemanggilan tabel

function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $id = $data['id'];
  $nama     = htmlspecialchars($data['nama']);
  $stock   = htmlspecialchars($data['stock']);
  $harga    = htmlspecialchars($data['harga']);
  $foto    = htmlspecialchars($data['foto']);

  $query = "INSERT INTO dbarang 
                 VALUES
              (null,'$nama','$stock','$harga','$foto');";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}




function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM dbarang WHERE id= $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;
  $id = $data['id'];
  $nama     = htmlspecialchars($data['nama']);
  $stock   = htmlspecialchars($data['stock']);
  $harga    = htmlspecialchars($data['harga']);
  $foto    = htmlspecialchars($data['foto']);

  $query = "UPDATE dbarang SET 
                nama ='$nama',
                stock ='$stock',
                harga ='$harga',
                foto ='$foto',
                WHERE id =$id;";



  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

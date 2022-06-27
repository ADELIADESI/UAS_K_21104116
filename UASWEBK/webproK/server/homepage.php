<?php
   include_once("dbkoneksi2.php");
   $sql = "SELECT NIM, NAMA,TGLLAHIR,JURUSAN, JK,ASAL  FROM mhs";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);

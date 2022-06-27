<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIM"])){
        include_once("dbkoneksi2.php");
        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $talag = $_POST["txTALAG"];
        $jur =  $_POST["txJUR"];  
        $jkel = $_POST["txJKEL"];
        $asal = $_POST["txASAL"];
      

        $sql = "INSERT INTO mhs(NIM,NAMA,TGLLAHIR,JURUSAN,JK,) VALUES('$nim','$nama','$talag','$jur','$jkel','$asal',)";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);

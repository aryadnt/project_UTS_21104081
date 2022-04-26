<?php

    include_once("koneksidb.php");
    $KodeBaju = "1234";
    $NamaPembeli = "Putu";
    $sql = "UPDATE Penjualan_Baju SET NamaPembeli='$NamaPembeli' WHERE KodeBaju='$KodeBaju';";

    $hsl = mysqli_query($cnn,$sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }
<?php
    
    include_once("koneksidb.php");
    $KodeBaju = "1234";
    $sql = "DELETE FROM Penjualan_Baju WHERE KodeBaju='$KodeBaju';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }
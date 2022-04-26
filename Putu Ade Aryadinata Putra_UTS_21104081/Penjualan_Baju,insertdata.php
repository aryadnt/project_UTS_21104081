<?php
    include_once ("koneksidb.php");
    $KodeBaju ="1234";
    $JumlahPesanan ="2";
    $NamaPembeli ="Arya";
    $Ukuran ="M";
    $Alamat ="Jalan Banteng Gang IIa No 11";

    $sql = "INSERT INTO Penjualan_Baju(KodeBaju,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeBaju','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "inser gagal<br>";
    }

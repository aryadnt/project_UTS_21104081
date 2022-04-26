<?php
    if(isset($_POST['txKodeBaju'])){
    include_once ("koneksidb.php");
    $KodeBaju =$_POST['txKodeBaju'];
    $JumlahPesanan =$_POST["txJumlahPesanan"];
    $NamaPembeli =$_POST["txNamaPembeli"];
    $Ukuran = $_POST["txUkuran"];
    $Alamat = $_POST["txAlamat"];

    $sql = "INSERT INTO Penjualan_Baju(KodeBaju,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeBaju','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }
}else{
    
    header("location: Penjualan_Baju-insertdatastok.php");
    
   // echo '<script>window.location.href="index.php"</script>';
}


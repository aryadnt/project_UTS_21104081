<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel penjualan baju</title>
</head>
<body>
    
    <form method="POST" action="Penjualan_Baju-insertdataform.php">
        Kode Baju <br>
        <input type="text" name="txKodeBaju"><br>    
        Jumlah Pesanan <br>
        <input type="text" name="txJumlahPesanan"><br>
        Nama Pembeli<br>
        <input type="text" name="txNamaPembeli"><br>
        Ukuran<br>
        <select name="txUkuran">
            <option value="M"> M </option>
            <option value="L"> L </option>
            <option value="XL"> XL </option>
        </select><br>
        Alamat
        <input type="text" name="txAlamat"><br>
        <br><br>
        <button type=submit> simpan data </button>
    </form>
</body>
</html>
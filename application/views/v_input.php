<!DOCTYPE html>
<head> 
    <title>Menambah data</title>
</head>
<body>
    <center> 
        <h1>DICKY ARYA PRATAMA</h1>
        <h3>1218009</h3>
    </centar>
    <form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
    <table style="margin:20px auto;">
    <?php
    $a = 2;
    $b = 3;
    if (isset($_POST['CheckOut'])) { 
        echo $hasil = $a * $b;
    }
    ?>
    <tr>
        <td>KODE BARANG<td>
            <td><input type="number" name="nama"><td>
    </tr>
    <tr>
        <td>NAMA BARANG<td>
            <td><input type="text" name="alamat"><td>
    </tr>
    <tr>
        <td>JUMLAH PESANAN/TOTAL<td>
            <td><input type="number" name="pekerjaan"><td>       
    </tr>
Silahkan cekout di menu table :)
    <tr>
        <td></td>
    <td><input type = "submit" value = "Kirim"><td>
    
    </tr>

        </table>
    </form>
</body>
</html>
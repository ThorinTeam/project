<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center>
		<h1>CheckOut</h1>
		<h3>Cekout</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
		<tr>
        <td>KODE BARANG<td>
            <td><input type="number" name="nama"value="<?php echo $u->nama ?>"><td>
    </tr>
    <tr>
        <td>NAMA BARANG<td>
            <td><input type="text" name="alamat" value= "<?php echo $u->alamat ?>" ><td>
    </tr>
    <tr>
        <td>JUMLAH PESANAN<td>
            <td><input type="number" name="Jumlah"><td>       
    </tr>
    <tr>
    <td>HARGA<td>
            <td><input type="number" name="harga"><td>
    </tr>
    <tr>
    <td>TOTAL HARGA<td>
            <td><input type="number" value="<?php echo $u->pekerjaan ?>"> <td>  
    </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Checkout"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>
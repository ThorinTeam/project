<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<center>
		<h1>EDIT</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Kode Barang</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="number" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Nama barang</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>
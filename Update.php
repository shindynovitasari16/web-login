<html>
<head>
	<title>Input Data Barang</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<h3><div class = "Jdl">KELOLA DATA BARANG</div></h3>
	<br>
	<br>
	
<?php
	//koneksi ke database
		include("connect.php");
		$id = $_GET['id'];
	
$edit = mysql_query( "select * from barang where id='$id'")or die(mysql_error()); 
while ($data = mysql_fetch_array($edit)){
	
?>

	<form action = "edit.php" method = "post" p align = "center">
	<table width= 50% height= 5%  align = "center">
	<tr>
	<td><b>Update Data Barang</b></td>
	</tr>
	</table>
	<br>
	<table width= 50% height= 5%  align = "center">
	<tr>
	<td>Kode: </td>
	<td><input class = "br" name="kode" type="text"  value="<?php echo $data['kode']; ?>"></td>
	</tr>
	<tr>
	<td>Nama: </td>
	<td><input type="text" name="nama" class = "br" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	<tr>
	<td>Deskripsi:  </td>
	<td><textarea name="deskripsi" class = "br" ><?php echo $data['deskripsi']; ?></textarea></td>
	</tr>
	<tr>
	<td>Stok:  </td>
	<td><input type="text" name="stok" class = "br" value="<?php echo $data['stok']; ?>"></td>
	</tr>
	<tr>
	<td>Harga: </td>
	<td><input type="text" name="harga" class = "br" value="<?php echo $data['harga']; ?>"></td>
	</tr>
	<tr>
	<td>Berat:  </td>
	<td><input type="text" name="berat" class = "br" value="<?php echo $data['berat']; ?>"><i> gram</i></td>
	</tr>
	<table>
	</form>
	<p align= "center"><input class = "btn" type=submit value= "Update"></p>
<?php
}
?>
</body>
</html>
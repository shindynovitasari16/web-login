<html>
<head>
	<title>Input Data Barang</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<h3><div class = "Jdl">KELOLA DATA BARANG</div></h3>
	<br>
	<br>
	<form action = "Inpt.php" method = "post" p align = "center">
	<table width= 50% height= 5% align = "center">
	<tr>
	<td><b>Input Data Barang</b></td>
	</tr>
	</table>
	<br>
	<table width= 50% height= 5% align = "center">
	<tr>
	<td>Kode: </td>
	<td><input class = "br" name="kode" type="text"></td>
	</tr>
	<tr>
	<td>Nama: </td>
	<td> <input type="text" name="nama" class = "br"></td>
	</tr>
	<tr>
	<td>Deskripsi: </td>
	<td><textarea name="deskripsi" class = "br"></textarea></td>
	</tr>
	<tr>
	<td>Stok: </td>
	<td><input type="text" name="stok" class = "br"></td>
	</tr>
	<tr>
	<td>Harga: </td>
	<td><input type="text" name="harga" class = "br"><i></i></td>
	</tr>
	<tr>
	<td>Berat: </td>
	<td><input type="text" name="berat" class ="br"><i>gram</i></td>
	</tr>
	<table>
	</form>
	<p align= "center"><Button class = "btn">Tambah</Button></p>

</body>
</html>
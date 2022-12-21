<html>
<head>
	<title>Rekam Medis Online</title>
</head>
<style type="text/css">
	#isi{
		border-style:solid;
		border-width: thin;
		margin : 100px;
		margin-top: 20px;
		padding: 10px;
	}
	input,select{
		height: 30px;
	}
	button{
		padding: 10px 40px; 
		font-weight: bold; 
	}
</style>
<body>
<div id="isi">
|<a href="form.php">Input Data</a> | <a href="lihat_data.php">Lihat 
data</a> |
 <h2>Daftar Pasien</h2>
 <table border="1" width="100%">
 	<thead>
 		<tr>
 			<td>No RM</td>
 			<td>Nama</td>
 			<td>Jenis Kelamin</td>
 			<td>Tempat, Tgl Lahir</td>
 			<td>Alamat</td>
 			<td>Jenis Pasien</td>
 			<td>Jenis ID</td>
 			<td>No ID</td>
 			<td>Agama</td>
 			<td>Gol Darah</td>
 			<td>No Telp</td>
 			<td>Foto</td>
 		</tr>
 	</thead>
 	<?php 
 	include "koneksi.php";
 	$sql = mysqli_query($conn,"SELECT * FROM tbl_pasien");
 	while ($data = mysqli_fetch_array($sql)) {
 		echo "
 		<tr>
 			<td>$data[no_rm]</td>
 			<td>$data[nama]</td>
 			<td>$data[jenis_kelamin]</td>
 			<td>$data[tempat_lahir], $data[tgl_lahir]</td>
 			<td>$data[alamat]</td>
 			<td>$data[jenis_pasien]</td>
 			<td>$data[jenis_id]</td>
 			<td>$data[no_id]</td>
 			<td>$data[agama]</td>
 			<td>$data[gol_darah]</td>
 			<td>$data[no_telp]</td>
 			<td>
 				<img src='$data[foto]' width='50%'>
 			</td>
 		</tr>
 		";

 	}
 	?>		
 </table>
</div>
</body>
</html>
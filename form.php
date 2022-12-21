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
 <h2>Pendaftaran Pasien</h2>
 <hr style="border-style:solid;"><br> 
 <form action="input_aksi.php" method="POST" enctype="multipart/form-data">
 <table width="100%"> 
 <tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama"size="50%"></td>
 </tr>
 <tr>
<td>Jenis Kelamin</td>
 <td>
 <select name="jk">
 <option value="laki-laki">Laki-laki</option>
 <option value="perempuan">Perempuan</option>
 </select>
 </td>
 </tr>
 <tr>
<td>Tempat/Tgl.Lahir</td>
 <td>
 <input type="text" name="tempat_lahir">
 <input type="date" name="tgl_lahir">
 </td>
 </tr>
 <tr>
<td valign="top">Alamat</td>
 <td>
 <textarea cols="50" rows="4" name="alamat">
 </textarea>
 </td>
 </tr>
 <tr>
<td valign="top">Jenis Pasien</td>
 <td>
 <select name="jenis_pasien">
 <option value="Umum">Umum</option>
 <option value="Gratis">Gratis</option>
 <option value="BPJS">BPJS</option>
 <option value="SKTM">SKTM</option>
 </select>
 </td>
 </tr>
 <tr>
<td valign="top">No ID</td>
 <td>
 <select name="jenis_id">
 <option value="KTP">KTP</option>
 <option value="SIM">SIM</option>
 <option value="BPJS">BPJS</option>
 <option value="Lainnya">Lainnya</option>
 </select>
 <input type="text" name="no_id" size="30%">
 </td>
 </tr>
 <tr>
 <td>Agama</td>
 <td>
 <select name="agama">
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Budha">Budha</option>
 <option value="Hindu">Hindu</option>
 <option value="Konghuchu">Konghuchu</option>
 </select>
 </td>
 </tr>
 <tr>
<td>Gol Darah</td>
 <td>
 <select name="gol_darah">
 <option value="A">A</option>
 <option value="B">B</option>
 <option value="AB">AB</option>
 <option value="O">O</option> 
 </select>
 </td>
 </tr>
 <tr>
<td>No.Telp/HP</td>
 <td>
 <input type="text" name="no_hp" size="50%">
 </td>
 </tr>
 <tr>
 	<td>Foto</td>
 	<td>
 		<input type="file" name="foto">
 	</td>
 </tr>
<tr>
<td></td>
 <td>
 <button type="submit" name="simpan">Simpan</button>
 <button type="reset" name="reset">Reset</button>
 </td>
 </tr>
 </table> 
</form>
</div>
</body>
</html>
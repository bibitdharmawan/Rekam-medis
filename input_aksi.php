<?php 
include "koneksi.php";
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$jenis_pasien = $_POST['jenis_pasien'];
$jenis_id = $_POST['jenis_id'];
$no_id = $_POST['no_id'];
$no_hp = $_POST['no_hp'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$gol_darah = $_POST['gol_darah'];

$upload_dir = "folder_foto/";
$tmp_name = $_FILES['foto']['tmp_name'];
$filename = $_FILES['foto']['name'];
$uploaded_file = $upload_dir.$filename;
move_uploaded_file($filename, $upload_dir);

$simpan2 = mysqli_query($conn,"INSERT INTO tbl_pasien 
		VALUES ('','$nama','$jk','$tempat_lahir','$tgl_lahir','$alamat','$jenis_pasien','$jenis_id','$no_id','$gol_darah','$agama','$no_hp','$uploaded_file')");
if($simpan2){
	echo "<script>alert('Data Berhasil Disimpan')</script>";
	echo "<script>location.href='lihat_data.php'</script>";
}else{
	echo "<script>alert('Data Gagal Disimpan')</script>";
	echo "<script>history.go(-1)</script>";
}
?>
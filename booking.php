<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_lengkap   = $_POST['nama_lengkap'];
$paket_layanan  = $_POST['paket_layanan'];
$pembayaran     = $_POST['pembayaran'];
$no_hp          = $_POST['no_hp'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO tbl_booking SET nama_lengkap='$nama_lengkap',paket_layanan='$paket_layanan',pembayaran='$pembayaran',no_hp ='$no_hp',alamat='$alamat'";
$hasil=mysqli_query($koneksi, $query);
if ($hasil) {
	echo '<script type ="text/JavaScript">';  
    echo 'alert("BERHASIL MELAKUKAN PEMESANAN")';  
    echo '</script>'; 
}
else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("GAGAL MELAKUKAN PEMESANAN")';  
    echo '</script>';
}
?>
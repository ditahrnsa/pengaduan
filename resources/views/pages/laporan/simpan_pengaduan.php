<?php
require 'koneksi.php';
$tgl=$_POST['tgl_pengaduan'];
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_files['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

$sql=mysql_query("insert into pengaduan(     tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$ft','$st',)");
move_uploaded_file($file,"foto/.$ft");

if ($sql){
	?>
		<script type="text/javascript">
			alert ('Data Berhasildisimoan, Terimakasih sudah menulis laporan');
			window.location="Masyarakat.php";
		</script>
	<?php
}
?>
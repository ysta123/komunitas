<body>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("db_komunitas");
$a=$_POST['nama'];
$b=$_POST['email'];
$c=$_POST['komentar'];
$perintah="insert into komentar values('','$a','$b','$c')";
$simpan=mysql_query($perintah,$koneksi);
if($simpan)
echo"<meta http-equiv='refresh' content='0 url=admin/kontak.php?Data Telah Tersimpan'> ";
else
echo"Gagal";
?>
</body>
</html>
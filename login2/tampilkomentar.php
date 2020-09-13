<body>
<p align="center" class="style1">KOMENTAR</p>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("db_komunitas");
$tampil="SELECT*FROM komentar ORDER BY id";
$query=mysql_query($tampil) or die ("gagal".mysql_error());
$jumlah=mysql_num_rows($query);
?>
<div align="center">
<table width="80%" border="1">
<tr>
<td width="7%"><strong>No</strong></td>
<td width="29%"><strong>Nama</strong></td>
<td width="21%"><strong>Email</strong></td>
<td width="22%"><strong>Komentar</strong></td>
</tr>
<?php
$a=1;
while ($row=mysql_fetch_array($query))
{
$a++;
$a=$row['id'];
$b=$row['nama'];
$c=$row['email'];
$d=$row['komentar'];
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $b; ?></td>
<td><?php echo $c; ?></td>
<td><?php echo $d; ?></td>
</tr>
<?php } ?>
<tr>
<td colspan="6"> Jumlah Record: <?php echo $jumlah; ?> </td>
</tr>
<tr>
<td colspan="6"> <a href="admin/kontak.php">TAMBAH KOMENTAR</a> </td>
</tr>
</table>
</div>
</body>
</html>
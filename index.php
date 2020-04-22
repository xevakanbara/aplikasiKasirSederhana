<?php

// inisiasi variable yang digunakan
// nama peralatan
$mainboard ="Mainboard";
$processor ="Processor";
$ram ="Ram";
$harddisk="Harddisk";

// harga per unit peralatan
$harga_mainboard = $_POST ['harga_mainboard'];
$harga_processor=$_POST ['harga_processor'];
$harga_ram=$_POST['harga_ram'];
$harga_harddisk=$_POST['harga_harddisk'];

// jumlah peralatan yang ada
$jumlah_mainboard=$_POST['jumlah_mainboard'];
$jumlah_processor=$_POST['jumlah_processor'];
$jumlah_ram=$_POST['jumlah_ram'];
$jumlah_harddisk=$_POST['jumlah_harddisk'];

// total harga per jenis peralatan
$total_mainboard=$jumlah_mainboard * $harga_mainboard;
$total_processor=$jumlah_processor * $harga_processor;
$total_ram=$jumlah_ram * $harga_ram;
$total_harddisk=$jumlah_harddisk * $harga_harddisk;

// hitung peralatan total
$total_harga=$total_mainboard + $total_processor + $total_ram + $total_harddisk;

// besar diskon untuk peralatan
$diskon = $_POST['diskon'];

// jumlah total diskon yang diberikan
$nilai_diskon =($diskon * $total_harga)/100;

// jumlah yang harus dibayar
$total_harga_dibayar = $total_harga - $nilai_diskon;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kasir Hardware Komputer</title>
</head>
<body>
	<center>
		<form action="index.php" method="POST">
			<table border="1" cellspacing="0" cellpadding="3">
				<tr>
					<td colspan="4" align="center" valign="middle">
						<b>Daftar Pemesanan Hardware Komputer</b>
					</td>
				</tr>
				<tr align="center">
					<td width="136"><b>Nama Hardware</b></td>
					<td width="49"><b>Jumlah</b></td>
					<td width="109"><b>Harga Satuan</b></td>
					<td width="96"><b>Jumlah Harga</b></td>
				</tr>
				<tr>
					<td align="left"><?php echo $mainboard; ?></td>
					<td align="right"><input name="jumlah_mainboard" type="text" size="3" value="<?php echo $jumlah_mainboard; ?>"></td>
					<td align="right"><input name="harga_mainboard" type="text" size="15" value="<?php echo $harga_mainboard; ?>"></td>
					<td align="right"><?php echo $total_mainboard; ?></td>
				</tr>
				<tr>
					<td align="left"><?php echo $processor; ?></td>
					<td align="right"><input name="jumlah_processor" type="text" size="3" value="<?php echo $jumlah_processor; ?>"></td>
					<td align="right"><input name="harga_processor" type="text" size="15" value="<?php echo $harga_processor; ?>"></td>
					<td align="right"><?php echo $total_processor; ?></td>
				</tr>
				<tr>
					<td align="left"><?php echo $ram; ?></td>
					<td align="right"><input name="jumlah_ram" type="text" size="3" value="<?php echo $jumlah_ram; ?>"></td>
					<td align="right"><input name="harga_ram" type="text" size="15" value="<?php echo $harga_ram; ?>"></td>
					<td align="right"><?php echo $total_ram; ?></td>
				</tr>
				<tr>
					<td align="left"><?php echo $harddisk; ?></td>
					<td align="right"><input name="jumlah_harddisk" type="text" size="3" value="<?php echo $jumlah_harddisk; ?>"></td>
					<td align="right"><input name="harga_harddisk" type="text" size="15" value="<?php echo $harga_harddisk; ?>"></td>
					<td align="right"><?php echo $total_harddisk; ?></td>
				</tr>
				<tr>
					<td colspan="3" align="right">Total Harga</td>
					<td align="right"><?php echo $total_harga; ?></td>
				</tr>
				<tr>
					<td colspan="3" align="right">Diskon<input name="diskon" type="text" size="2" value="<?php echo $diskon; ?>">%</td>
					<td align="right"><?php echo $nilai_diskon; ?></td>
				</tr>
				<tr>
					<td colspan="3" align="right">Jumlah yang harus dibayar</td>
					<td align="right"><?php echo $total_harga_dibayar; ?></td>
				</tr>
				<td colspan="4" align="center"><input type="submit" value="OK"><input type="reset" value="Batal"></td>



			</table>
		</form>
	</center>
</body>
</html>

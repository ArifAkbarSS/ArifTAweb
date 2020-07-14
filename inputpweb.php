<!DOCTYPE html>
<html>
<head>
	<title>Total Harga</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama Barang..."></td>
			</tr>
			<tr>
				<td>Banyaknya</td>
				<td>:</td>
				<td>
					<select name="qty">
						<option value="">- QTY -</option>
						<?php for($x=1;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" placeholder="Harga Barang..."></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="hitung" value="Hitung">
					<input type="reset" name="batal" value="Batal">
				</td>
			</tr>
		</table>
	</form>
	<hr>
	<h2>Hasil :</h2>
        
        <!-- PHP Outpu hasil dari input diatas -->

		<?php
		<form method="get" action="tampil.php">
		<label>Masukan Nama</table></br>
		<input type="text" nama="nama"></br>
		<label>Masukan Harga</table></br>
		<input type="text" nama="harga"></br>
		<label>Masukan Jumlah</table></br>
		<input type="text" nama="qty"></br>

		if(isset($_POST['hitung'])){
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$qty = $_POST['qty'];
			$total = $harga*$qty;
			


			if($total>10000000){
				echo "Anda mendapatkan hadiah";
			}
			else{
				echo "Mohon maaf anda belum mendapatkan hadiah karna belum memenuhi syarat";
			}

 
			echo "
				<table border='1'>
					<tr>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Banyaknya</th>
						<th>Total Harga</th>
					</tr>
					<tr>
						<td>$nama</td>
						<td>$harga</td>
						<td>$qty</td>
						<td>$total</td>
					</tr>
				</table>
			";
		}
?>

</body>
</html>
<?php 
    @$alas = $_REQUEST['alas'];
    @$tinggi = $_REQUEST['tinggi'];
    @$sisi = $_REQUEST['sisi'];
    @$tinggi_limas = $_REQUEST['tinggi_limas'];
    @$luas_alas_segitiga = 1/2 * $alas * $tinggi;
    @$volume_limas_segitiga = 1/3 * $luas_alas_segitiga * $tinggi_limas;
    @$luas_alas_persegi = $sisi * $sisi;
    @$volume_limas_persegi = 1/3 * $luas_alas_persegi * $tinggi_limas;
?>
<!DOCTYPE html>
<html>
<head>
   <title>Luas Permukaan & Volume Kubus</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
</head>
<body>
<center>
	<div class="container">
	<h1>Luas Permukaan & Volume Limas</h1>
	<form method="REQUEST">
		<p>
			<label>Alas Segitiga:</label>
			<input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/></td>
		</p>
		<p>
			<label>Tinggi Segitiga:</label>
			<input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
        </p>
		<p>
			<label>Tinggi Limas :</label>
			<input type="text" name="tinggi_limas" value="<?php echo $tinggi_limas; ?>"/>cm<br/></td>
        </p>
		<p>
			<label>Sisi Persegi:</label>
			<input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/></td>
        </p>
		<p>
			<input type="submit" name="submit" value="Lihat Hasil" id="button" onClick="countData()">
		</p>
		<p>
			<label>--Luas Alas--</label>
		</p>
		<p>
			<label>Limas Segitiga</label>
			<?php echo $luas_alas_segitiga." cm^2";?>
		</p>
        <p>
        	<label>Limas Persegi</label>
            <?php echo $luas_alas_persegi." cm^2";?>
        </p>
        <p>
        	<label>--Volume--</label>
        </p>
		<p>
			<label>Limas Segitiga</label>
            <?php echo $volume_limas_segitiga." cm^3<br/>";?>
        </p>	
        <p>
        	<label>Limas Persegi</label>
            <?php echo $volume_limas_persegi." cm^3<br/>";?> 
		</p>
	</div>
</center>
</body>
</html>

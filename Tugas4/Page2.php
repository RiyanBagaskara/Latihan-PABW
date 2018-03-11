<?php

    $nama = $_FILES['upload']['name'];
    $tmp  = $_FILES['upload']['tmp_name'];

    move_uploaded_file($tmp, "./filebaru.jpg");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<link rel="stylesheet" href="css/style.css" media="screen">
		<script type="text/javascript">
</script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div id="art-main">
	<form  class="register" enctype="multipart/form-data">
	<h1>Registration</h1>
	<h2>Biodata</h2>
		<fieldset class="row1">
			<legend>Account Details</legend>
        	<p>
            	<label>Nama Lengkap</label><br>
            	<?php echo $_POST["nama_depan"] ?>
            	<?php echo $_POST["nama_belakang"] ?>
			</p>	
			<p>
            	<label>Jenis Kelamin</label><br>
            	<?php echo $_POST["jenis_kelamin"] ?>
			</p>
			<p>
            	<label>Tempat Lahir</label><br>
            	<?php echo $_POST["tempat_lahir"] ?>
			</p>
			<p>
            	<label>Tanggal Lahir</label><br>
            	<?php echo $_POST["tgl_lahir"] ?>
			</p>
			<p>
            	<label>Nomor Indentitas</label><br>
            	<?php echo $_POST["no_identitas"] ?>
			</p>	
			<p>
            	<label>Alamat</label><br>
            	<?php echo $_POST["alamat"] ?>
			</p>
		</fieldset>
		<fieldset class="row1">
			<legend>Further Information</legend>
			<p>
        		<label>Email</label><br>
            	<?php echo $_POST["email"] ?>
			</p>
			<p>
            	<label>Nomor Telepon</label><br>
            	<?php echo $_POST["no_telp"] ?>
			</p>
			<p>	
				<label>Pendidikan</label><br>
                <?php echo $_POST["pendidikan"] ?>
				</p>
				<p>
				<label>Hobi</label><br>
				<?php
					if(isset($_POST['upload'])){
					if(!empty($_POST['hobi'])){
					// Perulangan untuk menampilkan checkbox yang dipilih.
					foreach($_POST['hobi'] as $selected){
					echo $selected."</br>";
					}
					}
					}
				?>
				
				</p>
				<p>
        		<label>Berkas Pendukung:</label><br>
        		<img src="<?php echo $nama; ?>" />
				</p>
		</fieldset>
		<fieldset class="row1">
			<legend>Go Back</legend>
				<p>
				<a href="index.php" class="btn btn-info" role="button">Kembali ke halaman input &raquo; </a></p>
		</fieldset>
	</form>
			
</body>
</html>
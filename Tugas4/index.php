<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<link rel="stylesheet" href="css/style.css" media="screen">
	<script type="text/javascript">
</script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div id="art-main">
	<form  class="register" method='post' action="Page2.php" enctype="multipart/form-data">
	<h1>Registration</h1>
	<h2>Insert Biodata</h2>
		<fieldset class="row1">
			<legend>Account Details</legend>
        	<p>
            	<label>Nama Lengkap</label><br>
            	<input type="text" name="nama_depan" required="required" placeholder="Nama Depan">
            	<input type="text" name="nama_belakang" required="required" placeholder="Nama Belakang">
			</p>	
			<p>
            	<label>Jenis Kelamin</label><br>
            	<div style="float:left;margin-left: 60px;""><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</div>
				<div style="float:left"><input type="radio" required="required"  name="jenis_kelamin" value="perempuan">Perempuan</div>
			</p>
			<p>
            	<label>Tempat Lahir</label><br>
            	<input type="text" name="tempat_lahir" required="required">
			</p>
			<p>
            	<label>Tanggal Lahir</label><br>
            	<input type="date" name="tgl_lahir" required="required">
			</p>
			<p>
            	<label>Nomor Indentitas</label><br>
            	<input type="text" name="no_identitas" required="required">
			</p>	
			<p>
            	<label>Alamat</label><br>
            	<textarea type="text" name="alamat" required="required" height="50px" width="30px"></textarea>
			</p>
		</fieldset>
		<fieldset class="row1">
			<legend>Further Information</legend>
			<p>
        		<label>Email</label><br>
            	<input type="email" name="email" required="required" placeholder="exampel@example.com">
			</p>
			<p>
            	<label>Nomor Telepon</label><br>
            	<input type="text" name="no_telp" required="required">
			</p>
			<p>	
				<label>Pendidikan</label><br>
                   <select name="pendidikan"  required="required">
						<option value="">
                        </option>
						<option value="SD">SD
                        </option>
						<option value="SMP">SMP
                        </option>
                        <option value="SMA">SMA
                        </option>
                        <option value="SARJANA">SARJANA
                        </option>
					</select>
			</p>
			<p>
				<label>Hobi</label><br>
        			<input type="checkbox" name="hobi[]" value="Membaca">Membaca
					<br>
					<input type="checkbox" name="hobi[]" value="Main Game">Main Game
					<br>
					<input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
					<br>
					<input type="checkbox" name="hobi[]" value="Belanja">Belanja
					<br>
					<input type="checkbox" name="hobi[]" value="Lainnya">Lainnya
					<br>
			</p>
			<p>
        		<label>Berkas Pendukung:</label><br>
    			<input type="file" name="upload" required="required">
			</p>
			<p>
				<label></label><br>
        		<input type="checkbox" id="myCheck"  onclick="myFunction()" required="required">
            	Klik jika anda menyetujui syarat dan ketentuan
				<p id="text" style="display:none">Notes: Anda telah menyetujui</p>
						<script>
						function myFunction() {
						    var checkBox = document.getElementById("myCheck");
						    var text = document.getElementById("text");
						    if (checkBox.checked == true){
						        text.style.display = "block";
						    } else {
						       text.style.display = "none";
							}
						}
						</script>
			</p>
		</fieldset>
			<div><button class="button" type="submit" value="submit" name="upload">Register &raquo; </button></div>
	</form>
			
</body>
</html>
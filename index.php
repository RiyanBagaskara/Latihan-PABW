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
	<form  class="register" method='post' action="insert.php" enctype="multipart/form-data">
	<h1>Phonebook</h1>
	<h2>Insert Biodata</h2>
		<fieldset class="row1">
			<legend>Account Details</legend>
        	<p>
            	<label>Nama Lengkap</label><br>
            	<input type="text" name="nama" required="required" placeholder="Nama Lengkap">
			</p>
			<p>
        		<label>Email</label><br>
            	<input type="email" name="email" required="required" placeholder="exampel@example.com">
			</p>
			<p>
            	<label>Nomor Telepon</label><br>
            	<input type="text" name="no_telp" required="required" placeholder="Nomor Telepon">
			</p>
			<p>
            	<label>Pekerjaan</label><br>
            	<input type="text" name="kerja" required="required" placeholder="Pekerjaan">
			</p>
			<p>
            	<label>Hobi</label><br>
            	<input type="text" name="hobi" required="required" placeholder="Hobi">
			</p>
		</fieldset>
			<div><button class="button" type="submit" value="submit" name="action">Input &raquo; </button></div>
	</form>
			
</body>
</html>
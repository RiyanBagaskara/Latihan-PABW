<?php

$file = "data.txt";
$data = file_get_contents($file);

function editData($nama, $email, $no_telp, $kerja, $hobi) {
    $data = $nama  . "|F|" . 
        $email . "|F|" .
        $no_telp . "|F|" .
        $kerja . "|F|" .
        $hobi;
        return $data;
}

$rowdel = $_GET['row'];

$baris = explode("[R]", $data);
$databaru = "";
for($i = 0; $i<count($baris)-1; $i++) {
    $kolom = explode("|F|", $baris[$i]);
    if($i == $rowdel) {
        ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/style.css" media="screen">
	<script type="text/javascript">
</script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div id="art-main">
	<form  class="register" method='post' action="#" enctype="multipart/form-data">
	<h1>Phonebook</h1>
	<h2>Edit Biodata</h2>
		<fieldset class="row1">
			<legend>Account Details</legend>
        	<p>
            	<label>Nama Lengkap</label><br>
            	<input type="text" name="nama" required="required" value="<?php echo $kolom[0] ?>">
			</p>
			<p>
        		<label>Email</label><br>
            	<input type="email" name="email" required="required" value="<?php echo $kolom[1] ?>">
			</p>
			<p>
            	<label>Nomor Telepon</label><br>
            	<input type="text" name="no_telp" required="required" value="<?php echo $kolom[2] ?>">
			</p>
			<p>
            	<label>Pekerjaan</label><br>
            	<input type="text" name="kerja" required="required" value="<?php echo $kolom[3] ?>">
			</p>
			<p>
            	<label>Hobi</label><br>
            	<input type="text" name="hobi" required="required" value="<?php echo $kolom[4] ?>">
			</p>
		</fieldset>
			<div><button class="button" type="submit" value="submit" name="submit">Edit &raquo; </button></div>
	</form>
			
</body>
</html>

<?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_telp = $_POST['no_telp'];
            $kerja = $_POST['kerja'];
            $hobi = $_POST['hobi'];
            $baris[$i] = editData($nama, $email, $no_telp, $kerja, $hobi);
        }
        
    }
    $databaru .= $baris[$i] . "[R]";
}
if (isset($_POST['submit'])) {
    
    file_put_contents($file, $databaru);

    header('location:baca.php');
}
?>
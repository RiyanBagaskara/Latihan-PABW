<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$kerja = $_POST['kerja'];
$hobi = $_POST['hobi'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $no_telp . "|F|" .
        $kerja . "|F|" .
        $hobi . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo '<script>alert("Data sudah Tersimpan");window.location.href="baca.php";</script>';
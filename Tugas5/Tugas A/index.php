<?php
    $dibuka = 1;
    $now = date('Y-m-d H:i:s');
    if (isset($_COOKIE['dibuka'])) {
        $count = $_COOKIE['dibuka']+1;
        $dibuka = $count;
    }
    date_default_timezone_set('Asia/Jakarta');
    setcookie("dibuka", $dibuka, time()+3600);
    setcookie("waktu",$now, time()+3600);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
    <title>Page Reload</title>
</head>
<body>
<div class="container">
	<h1>Count</h1>
    <p>Count sudah tertambah.. Reload page untuk menambah count<p>
	<p>Lihat result
    <a href="result-cookies.php">disini </a></p>
</div>
</body>
</html>


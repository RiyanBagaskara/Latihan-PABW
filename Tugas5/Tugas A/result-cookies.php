

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
    <title>Page Result</title>
</head>
<body>
<div class="container">
	<h1>Result</h1>
	<p><?php 
    if (isset($_COOKIE['dibuka'])) {
        
        echo "Halaman tersebut telah dibuka sebanyak "."&raquo;".$_COOKIE['dibuka']." kali"."<br>";
         
        echo "Terakhir dibuka pada waktu ". $_COOKIE['waktu']."<br>";       
    }
    else echo "BELUM ADA COOKIES";
?></p>
    <p>Kembali ke halaman count</a>
	<a href="index.php">disini </a></p>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
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
	<h2>All Contact	</h2>
		<fieldset class="row1">
			<legend>Account Details</legend>
        	<p>
            	

					<?php

					$file = "data.txt";
					$data = file_get_contents($file);

					$baris = explode("[R]", $data);

					echo "<table border=1>";
					echo "<tr  bgcolor=#1ABC9C>";
					echo "  <td>Nama</td><td>Email</td>";
					echo "  <td>Phone</td><td>Job</td>";
					echo "	<td>Hobby</td><td>Action</td>";
					echo "</tr>";
					for($i =0; $i<count($baris)-1; $i++) {
					    //echo $b . "<br>";

					    $col = explode("|F|", $baris[$i]);

					    echo "<tr>";
					    echo "  <td>" . $col[0] . "</td>";
					    echo "  <td>" . $col[1] . "</td>";
					    echo "  <td>" . $col[2] . "</td>";
					    echo "  <td>" . $col[3] . "</td>";
					    echo "  <td>" . $col[4] . "</td>";
					    echo '  <td> <a href="delete.php?row='.$i.'">Delete</a> 
					    			<a href="edit.php?row='.$i.'">| Update</a> </td>';
					    echo "</tr>";
					}
					echo "</table>";
					 echo '<br><a href="index.php"><< Isi data</a>';
					 ?>
			</p>
		</fieldset>	</form>
			
</body>
</html>

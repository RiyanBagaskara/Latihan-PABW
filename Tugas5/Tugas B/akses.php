<!DOCTYPE html>
<html>

<head>


</head>

<body>
    <span style=" font-size: 1.2em; color :#ffa7a7" ;font face="Chiller" ;>
    <?php 
	include "Tugas4.php";
session_start();

@$username = $_REQUEST ['usr'];
@$password = $_REQUEST['pwd'];

$detect = detect_browser();
$jam = detect_jam();
$hari = detect_day ();
$tgl = detect_tgl ();

 $t=date("H"); 

if ($username == "admin" and $password == "admin") {
 if ($t >= "18" && $t <= "24"){ 
 echo '<div > <img  src="img/a811a271be7d26f6b72e3ce520c158e2.png" align = "left" width="20%" height="20%"> </div>';
  	echo   '<br>'.'<br>'.'<br>'. '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<div style = " font-size: 3.5em;font-style: italic; color : #47272b;";font face="Chiller">Good Night... </div>';
 	echo  '<div style = "font-style: italic; color :#47272b;";font face="Chiller">Have a nice dream.. </div>';
	echo '<br><br>  <span> </span>'. '<div style = "color :#512e33;"> Your Browser : '.$detect. '<br>'; 
	echo ' '. ' Day :  '.$hari. '<br>'; 
	echo ' '. ' Date : '.$tgl. '<br>'; 
	echo ' '. ' Time : '.$jam. '</div><br>'; 
}

 if ($t>"0" && $t <= "10") { 
 echo '<div><img  src="img/treepagi.png" align = "left" width="40%" height="40%"> </div>';
  	echo  '<br>'. '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'. '<br>'.'<div style = " font-size: 3.5em;font-style: italic; color :#43c91a;";font face="Chiller">Good Morning...</div>';
		echo  '<div style = "font-style: italic; color :#43c91a;";font face="Chiller">Have a good day and blessed day.. </div>'.'<br>';

echo ' <span> </span>'.'
   <br> <div style = "color: #5ca447;"> Your Browser : '.$detect.'
        <br>'; echo ' '.' Day : '.$hari.'
        <br>'; echo ' '.' Date : '.$tgl.'
        <br>'; echo ' '.' Time : '.$jam.'</div>
    <br>'; } 
	if ($t>="11" && $t <= "17") { 
	echo '<br><div><img  style = "margin-right : 30px;" src="img/treesiang.png" align = "left" width="30%" height="30%"> </div>'; 
	echo '<br>'. '<br>'. '<br>'. '<br>'. '<br>'. '<br>'. '<div class = "afternoon" style = " font-size: 3.5em;font-style: italic; color : #f36b3a;";font face="Chiller">Good Afternoon... </div>'; 
	echo '<div  style = "font-style: italic; color : #f36b3a;";font face="Chiller">it is the perfect time to stop and be Thankfull.. </div>'. '<br>'; 
	echo '<br><br>  <span> </span>'. '<div style = "color : #cd6e4c;"> Your Browser : '.$detect. '<br>'; 
	echo ' '. ' Day :  '.$hari. '<br>'; 
	echo ' '. ' Date : '.$tgl. '<br>'; 
	echo ' '. ' Time : '.$jam. '</div><br>'; 
	} 
	} 
	else echo '<br>.<div style = "color:black"> User name atau password salah..</div>' ?>

        </span>

</body>

</html>
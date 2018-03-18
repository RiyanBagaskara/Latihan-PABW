<?php 

 
 function detect_browser(){
if (preg_match('/(chrome)/i',$_SERVER['HTTP_USER_AGENT'],$VERSION)){
$browser= $VERSION[1];}
else if (preg_match ('/(Firefox)/i',$_SERVER['HTTP_USER_AGENT'],$VERSION)){
$browser= $VERSION[1];
}
else if (preg_match ('/(Safari)/i',$_SERVER['HTTP_USER_AGENT'],$VERSION)){
	$browser= $VERSION[1];
}
else if (preg_match ('/(Opera)/i',$_SERVER['HTTP_USER_AGENT'],$VERSION)){
	$browser= $VERSION[1];
}
else if (preg_match ('/(Netscape)/i',$_SERVER['HTTP_USER_AGENT'],$VERSION)){
$browser= $VERSION[1];
}
else if (preg_match ('/(Trident)/i',$_SERVER['HTTP_USER_AGENT'],$VERSION)){
	$browser= $VERSION[1];
}
return $browser;
}

function detect_tgl (){
	date_default_timezone_set ('Asia/Jakarta');
$tgl = date(' d-m-Y');
return $tgl;
}
function detect_day (){
	date_default_timezone_set ('Asia/Jakarta');
$hari= date('l');
return $hari;
}
function detect_jam (){
	date_default_timezone_set ('Asia/Jakarta');
$jam = date('H:i:s');
return $jam;
}



?>

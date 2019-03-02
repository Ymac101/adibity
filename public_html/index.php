<?php
if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0 (Windows NT 5.1; Win32; x64) AppleWebKit/13.37 (KHTML, like Loki) Hanich/90") {
	require_once("../private_php/bis_main.php") ;
} else {
	require_once("../private_php/innocent_main.php") ;
}
?>
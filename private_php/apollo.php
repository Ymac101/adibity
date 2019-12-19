<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agam Buchbut</title>
  <link href="sources/favicon.ico" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="sources/css/i_really_should_do_it_smarter.css">>
</head>

<?php
if (isset($_GET['bizyoni'])) {
  include('../private_php/dickbutt.html') ;
}
?>

<body style="background-color:white">

<?php
if (isset($_GET["xss"])) {
	echo '<script type="text/javascript">alert(1337)</script>';
}?>

<div id="clockdiv">
	<img src="sources/img/hawkeye.png" class="center"/>
	<br/>
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>

<script src="sources/js/countdown.js""></script>
</div>
</body>
</html>
<?php
header('Server: not nginx lol', true);
header('Bis: 90', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adi Bity</title>
  <link href="sources/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body style="background-color:black">
<?php
if (isset($_GET["xss"])) {
	echo '<script type="text/javascript">alert(1337)</script>';
}
?>
<img src="sources/bois_kastel.png">
</body>
</html>
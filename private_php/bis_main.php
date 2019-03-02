<?php
if (!isset($_GET["page"])) {
    header('Bis: 90', true);
    require_once("bis.php");
} else {
    switch ($_GET["page"]) {
      case 'mivtzar':
        header('Bis: 90 or 40 or 80 or 20 or MAMRAM', true);
        require_once("mivtzar.php");
        break;
      case 'apollo':
        header('Bis: 90 or 40 or 20', true);
        require_once("apollo.php");
        break;
      default:
        header('Bis: 90', false);
        require_once("bis.php");
        break;
    }
}
?>

<?php 
if (isset($_GET['page'])) {
$requested_page = $_GET['page'];
}
else {
$requested_page = 'contenu';
}
// a better way would be to put this into an array, but I think a switch is easier to read for this example
switch($requested_page) {
   case "contenu":
      include(__DIR__."/contenu.php");
      break;
   case "profil":
      include(__DIR__."/profil.php");
      break;
      case "contact":
        include(__DIR__."/contact.php");
        break;
   default:
      include(__DIR__."/404.php");
}
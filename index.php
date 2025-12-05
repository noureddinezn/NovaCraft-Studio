<?php


$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($page) {
      $title = "NovaCraft Studio - Home";
        $thispage = "views/home.php";
        break;
        case '/contact':
        $title = "NovaCraft Studio - Contact";
        $thispage = "views/contact.php";
        break;

                case '/service':
        $title = "NovaCraft Studio - Services";
        $thispage = "views/services.php";
        break;

    case '/about':
        $title = "NovaCraft Studio - About us";
        $thispage = "views/about.php";
        break;
         default:
        $title = "Not found";
        $thispage = "views/404.php";
        break;


   
  
}



?>





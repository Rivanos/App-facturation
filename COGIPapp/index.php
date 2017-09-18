<?php

 include("Views/header.php");

      if(isset($_GET["page"])){
        $page = $_GET['page'];
        $pages = "Views/".$page.".php";
        include("$pages");
      }
      else {
        include("Views/Home.php");
      }

include("Views/footer.php")

?>

<?php
    // un message d'accueil pour Jean-Christian Ranu
    // la liste des 5 dernières factures, classées par date (chaque facture renvoie avec un lien vers sa page detailfacture)
    // la liste des 5 dernières personnes, encodées dans la base de données (chaque personne renvoie avec un lien vers sa page detailcontact)
    // la liste des 5 dernières entreprises, encodées dans la base de données (chaque société renvoie à l'aide d'un lien vers sa page detailsociete)
    // un lien vers la page fournisseurs
    // un lien vers la page clients

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

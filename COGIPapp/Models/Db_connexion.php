<?php

$dbh = new PDO('mysql:host=localhost;dbname=facturation;charset=utf8', "root", "root");


// NOTE: select facture home
  $sql_facture_limite = "SELECT * FROM factures ORDER BY id_facture DESC LIMIT 0,5";
  $nb_facture_limite = $dbh->query($sql_facture_limite);
// NOTE: select personne home
  $sql_personne_limite = "SELECT * FROM personnes ORDER BY id_personne DESC LIMIT 0,5";
  $nb_personne_limite = $dbh->query($sql_personne_limite);
// NOTE: select societe home
  $sql_societe_limite = "SELECT * FROM societes ORDER BY id_societe DESC LIMIT 0,5";
  $nb_societe_limite = $dbh->query($sql_societe_limite);

// NOTE: select facture home
  $sql_facture_all = "SELECT * FROM factures ORDER BY id_facture DESC";
  $nb_facture_all = $dbh->query($sql_facture_all);
// NOTE: select personne home
  $sql_personne_all = "SELECT * FROM personnes ORDER BY id_personne DESC";
  $nb_personne_all = $dbh->query($sql_personne_all);
// NOTE: select societe home
  $sql_societe_all = "SELECT * FROM societes ORDER BY id_societe DESC";
  $nb_societe_all = $dbh->query($sql_societe_all);

// NOTE: select all fournisseurs
  $sql_societe_fournisseurs = "SELECT * FROM societes where id_type=1 ORDER BY id_societe DESC";
  $nb_societe_fournisseurs = $dbh->query($sql_societe_fournisseurs);
// NOTE: select all fournisseurs
  $sql_societe_clients = "SELECT * FROM societes where id_type=2 ORDER BY id_societe DESC";
  $nb_societe_clients = $dbh->query($sql_societe_clients);
 ?>

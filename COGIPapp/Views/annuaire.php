<?php require_once 'Models/Db_connexion.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // NOTE: select facture home sans limite
    $sql = "SELECT * FROM personnes WHERE id_personne='$id'";
    // on execute la requete
    $nb = $dbh->query($sql);
    // on crée un tableau pour stocker les infos de la requete
    // on affiche
    while($row = $nb->fetch()){ ?>
      <div class="container">
        <div class="row list-group">
          <div class="col-md-2 list-group-item">
            <?= $row['id_personne'] ?>
          </div>
          <div class="col-md-2 list-group-item">
            <?= $row['nom_personne'] ?>
          </div>
          <div class="col-md-2 list-group-item">
            <?= $row['prenom_personne'] ?>
          </div>
          <div class="col-md-2 list-group-item">
            <?= $row['tel_personne'] ?>
          </div>
          <div class="col-md-2 list-group-item">
            <?= $row['email_personne'] ?>
          </div>
          <div class="col-md-2 list-group-item">
            <?= $row['id_societe'] ?>
          </div>
        </div>
      </div>
    <?php }
  }
  ?>
   <div class="container">
     <h1>Toutes les personnes</h1>
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
       <div class="container">
          <div class="row">
              <div class="span5">
                <table class="table table-striped table-condensed">
                 <thead>
                   <tr>
                     <th>Societe</th>
                   </tr>
                 </thead>
                 <tbody>

       <?php
         while($row = $nb_personne_all->fetch()){
           echo '
           <tr>
             <td><a href="index.php?page=annuaire&id='.$row["id_personne"].'">'.$row['nom_personne']." ".$row['prenom_personne'].'</a></td>
           </tr>';
       } ?>
                 </tbody>
                 </table>
         </div>
       </div>
     </div>
   </div>
    </div>
  </div>
</div>

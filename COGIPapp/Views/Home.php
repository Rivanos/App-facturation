<?php require_once 'Models/Db_connexion.php'  ?>

<div class="container" id="smoothe">
    <div class="col-md-4 block">
      <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="container">
             <div class="row">
                   <table class="table table-striped table-condensed">
                    <thead>
                      <tr>
                        <th><h1>Factures</h1></th>
                      </tr>
                    </thead>
                    <tbody>

          <?php
            while($row = $nb_facture_limite->fetch()){
              echo '
              <tr>
                <td><a href="index.php?page=société&id='.$row["id_facture"].'">'.$row['numero_facture'].'</td>
              </tr>';
          } ?>
                    </tbody>
                    </table>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-4 block">
      <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="container">
             <div class="row">
                 <div class="span5">
                   <table class="table table-striped table-condensed">
                    <thead>
                      <tr>
                        <th><h1>Personnes</h1></th>
                      </tr>
                    </thead>
                    <tbody>

          <?php
            while($row = $nb_personne_limite->fetch()){
              echo '
              <tr>
                <td><a href="index.php?page=annuaire&id='.$row["id_personne"].'">'.$row['nom_personne']." ".$row['prenom_personne'].'</td>
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
    <div class="col-md-4 block">
      <div class="container ">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="container">
             <div class="row">
                 <div class="span5">
                   <table class="table table-striped table-condensed">
                    <thead>
                      <tr>
                        <th><h1>Societe</h1></th>
                      </tr>
                    </thead>
                    <tbody>

          <?php
            while($row = $nb_societe_limite->fetch()){
              echo '
              <tr>
                <td><a href="index.php?page=société&id='.$row['id_societe'].'">'.$row['nom_societe'].'</td>
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

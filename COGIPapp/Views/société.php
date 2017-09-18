<?php require_once 'Models/Db_connexion.php'; ?>

<div class="container">
  <h1>Toutes les sociétés</h1>
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
      while($row = $nb_societe_all->fetch()){
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


<?php  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // NOTE: select facture home sans limite
    $sql = "SELECT * FROM societes WHERE id_societe='$id'";
    $nb = $dbh->query($sql);
    while($row = $nb->fetch()){ ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12'>
                        <span class="glyphicon glyphicon-credit-card"></span>
                        <span class="glyphicon glyphicon-trash pull-right text-primary"></span>
                    </div>
                    <div class='col-lg-12 well well-add-card'>
                        <h4><?= $row['nom_societe'] ?></h4>
                    </div>
                    <div class='col-lg-12'>
                        <p><?= $row['adresse_societe'] ?></p>
                        <p class"text-muted"><?= $row['tel_societe'] ?></p>
                        <p> <?= $row['tva_societe'] ?></p>
                    </div>
                      <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card">Update</button>
                      <button type="button" class="btn btn-danger btn-xs btn-update btn-add-card">Vérifier</button>
                      <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
                 </div>
            </div>
      </div>
  <?php  }
} ?>
</div>
<hr />
<div id="fournisseurs" class="container">
<h1>Fournisseurs</h1>
<?php while($row = $nb_societe_fournisseurs->fetch()){ ?>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail">
            <div class="caption">
                <div class='col-lg-12'>
                    <span class="glyphicon glyphicon-credit-card"></span>
                    <span class="glyphicon glyphicon-trash pull-right text-primary"></span>
                </div>
                <div class='col-lg-12 well well-add-card'>
                    <h4><?= $row['nom_societe'] ?></h4>
                </div>
                <div class='col-lg-12'>
                    <p><?= $row['adresse_societe'] ?></p>
                    <p class"text-muted"><?= $row['tel_societe'] ?></p>
                    <p> <?= $row['tva_societe'] ?></p>
                </div>
                  <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card">Update</button>
                  <button type="button" class="btn btn-danger btn-xs btn-update btn-add-card">Vérifier</button>
                  <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
             </div>
        </div>
  </div>
<?php  } ?>
</div>
<hr />
<div id="clients" class="container">
<h1>Clients</h1>
<?php while($row = $nb_societe_clients->fetch()){ ?>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail">
          <div class="caption">
            <div class='col-lg-12'>
              <span class="glyphicon glyphicon-credit-card"></span>
              <span class="glyphicon glyphicon-trash pull-right text-primary"></span>
            </div>
            <div class='col-lg-12 well well-add-card'>
                <h4><?= $row['nom_societe'] ?></h4>
            </div>
            <div class='col-lg-12'>
              <p><?= $row['adresse_societe'] ?></p>
              <p class"text-muted"><?= $row['tel_societe'] ?></p>
              <p> <?= $row['tva_societe'] ?></p>
            </div>
              <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card">Update</button>
              <button type="button" class="btn btn-danger btn-xs btn-update btn-add-card">Vérifier</button>
              <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
            </div>
      </div>
  </div>
<?php  } ?>
</div>
</div>
</div>
</div>

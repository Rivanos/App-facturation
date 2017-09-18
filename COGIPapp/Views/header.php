<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>App COGIP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Views/css/Style.css">
  <body>
    <div class="container">
      <ul class="nav nav-tabs">
        <?php
        $page = ["Home", "facture", "annuaire", "société"];
        for ($i=0; $i < count($page) ; $i++) { ?>
          <li>
            <a  href="index.php?page=<?= $page[$i] ?>" title="home">
              <span  class="icon"> <i aria-hidden="true"  class="icon-home"></i></span><span><?= $page[$i] ?></span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 block">
            <h1>Service de Facturation:</h1>
            <h2>COGIP</h2>
          </div>
        </div>
      </div>

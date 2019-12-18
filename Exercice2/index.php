<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice2</title>
</head>
<body>
  <header>
    <div class="menu">
        <?php include '../header.php'; ?>
    </div>
  </header>
  <div class="jumbotron m-auto text-center" id="date">
    <p> <?php
    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    echo date('d-m-Y');
    ?> </p>
  </div>
</body>
</html>

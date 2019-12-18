<?php
$t1 = mktime('15', '00', '02', '08', '2016');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice4</title>
</head>
<body>
<header>
  <div class="menu">
      <?php include '../header.php'; ?>
  </div>
</header>
<div class="jumbotron m-auto text-center" id="date">
    <p><?php
        echo 'Timestamp actuel : ' .time(). '<br>';
        echo 'Timestamp du 2 août 2016 : ' . $t1;
    ?></p>
  </div>
</body>
</html>

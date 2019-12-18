<?php
$d=cal_days_in_month(CAL_GREGORIAN,02,2016);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice6</title>
</head>
<body>
  <header>
    <div class="menu">
        <?php include '../header.php'; ?>
    </div>
  </header>
  <div class="jumbotron m-auto text-center" id="date">
<p><?php
echo "Le mois de février 2016 comptait $d jours";
?></p>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice8</title>
</head>
<body>
  <header>
    <div class="menu">
        <?php include '../header.php'; ?>
    </div>
  </header>
  <div class="jumbotron m-auto text-center" id="date">
<p><?php
setlocale(LC_ALL,"fr_FR.UTF8");
$stop_date = new DateTime ('18-12-19');
echo 'La date du jour  : ' . date(' d-m-Y') . '<br>';
$stop_date->modify('-22 days');
echo 'Il y a 22 jours nous étions le : ' . $stop_date->format('d-m-Y ');
?></p>
  </div>
</body>
</html>

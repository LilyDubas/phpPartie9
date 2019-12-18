<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice3</title>
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
    echo date('l d F Y') . '<br/>';
    echo "La date du jour en français : " . (strftime("%A %d %B %Y"));
    ?></p>
  </div>
</body>
</html>

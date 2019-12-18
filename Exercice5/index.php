<?php
$t1 = mktime('15', '00', '02', '08', '2016');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice5</title>
</head>
<body>
  <header>
    <div class="menu">
        <?php include '../header.php'; ?>
    </div>
  </header>
  <div class="jumbotron m-auto text-center" id="date">
    <p><?php
$d1=strtotime("May, 2 , 2016");
$d2=ceil(($d1+time())/60/60/24);
echo "Il y a " . $d2 ." jours qui se sont écoulés depuis le 2 mai 2016";
?></p>
  </div>
</body>
</html>

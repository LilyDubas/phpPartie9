<?php
//recupération du mois courant $currentMonth = date('m');
$currentMonth = !empty($_POST['month'])? $_POST['month']: date('m');
// !empty et l'inverse de empty vide en francais
$currentYear = !empty($_POST['year'])? $_POST['year']: date('Y');
$daysInMonth = date('t', mktime(0,0,0,$currentMonth,1,$currentYear));
// recupére le 1er jour du mois pour l'année courante
$firstDayOfMonthInWeek = date('N',mktime(0,0,0,$currentMonth,1,$currentYear));
// tableau pour sauvegarder le nom des jours
$weekDays = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
// tableau pour sauvegarder le nom des mois
$yearMonths = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
?>
<!doctype html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>About Time</title>
</head>
<body>
  <header>
    <div class="jumbotron m-0 p-0">
      <div class="container">
        <img src="assets/img/Time.jpg" alt="temps illustration" id="header">
      </div>
    </div>
    <nav class="navbar sticky-top navbar-dark bg-secondary">
      <a class="navbar-brand" href="index.php">Calendrier</a>
      <a class="navbar-brand" href="holidays.php">Vacances et jours fériés</a>
      <a class="navbar-brand" href="info.php">Infos pratiques</a>
      <a class="navbar-brand" href="correction.php">Correction</a>
    </nav>
  </header>
  <div class="container">
      <h1>Année <?php echo $currentYear ?></h1>
      <form method="">
          <select name="month">
              <?php
              foreach ($yearMonths as $monthsNumber => $yearMonth): ?>
              <option value="<?= $monthsNumber+1 ?>"><?= $yearMonth ?></option>
              <?php endforeach; ?>
          </select>
          <select name="year">
              <?php
              for ($year = 1900; $year <= 2100; $year++): ?>
              <option value="<?= $year ?>"><?= $year ?></option>
              <?php endfor; ?>
          </select>
          <input type="submit" >
      </form>
      <table class="table table-bordered">
          <thead>
          <?php
          foreach($weekDays as $weekDay): ?>
          <th class="bg-light"><?php echo $weekDay; ?></th>
          <?php endforeach; ?>
          </thead>
          <tbody>
              <tr>
                 <?php
              $loop = TRUE;
              $cell = 1;
              $day = 1;
              $requiredCells = $daysInMonth + $firstDayOfMonthInWeek -1;
              while ($loop){
                  if ($firstDayOfMonthInWeek > $cell || $cell > $requiredCells ){?>
                  <td></td>
                   <?php
                  }
                  else {?>
                  <td class="bg-light"><?= $day ?></td>
                      <?php
                      $day++;
                  }
                  if ($cell % 7 == 0){
                       if($cell > $requiredCells){
                      break;
                  }
                      ?>
              </tr><tr>
                  <?php
                  }
                  $cell++;
                                   }
              ?>
              </tr>
          </tbody>
      </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

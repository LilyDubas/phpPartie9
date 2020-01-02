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
  <div class="calendrier">
    <?php
    require 'date.php';
    $date = new Date();
    $year = date('Y');
    $dates = $date -> getAll($year);
    ?>
    <div class="periods">
      <div class="year">
        <h1><?php echo $year ?></h1>
        <div class="months">
          <ul>
            <?php foreach ($date->months as $id=>$m): ?>
              <li><a href="" id="linkMonths<?php echo $id+1; ?>"><?php echo $m ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php $dates = current($dates); ?>
      <?php foreach ($dates as $m => $days) : ?>
        <div class="month" id="month<?php echo $m ?>">
          <table>
            <thead>
              <tr>
                <?php foreach ($date->days as $d): ?>
                  <th><?php echo substr($d, 0, 3); ?></th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $end = end($days); foreach ($days as $d => $w): ?>
                  <?php if ($d == 1): ?>
                    <td colspan = "<?php echo $w-1; ?>" class="padding"></td>
                  <?php endif; ?>
                  <td><?php echo $d; ?></td>
                  <?php if ($w == 7): ?>
                  </tr><tr>
              <?php endif; ?>
              <?php endforeach; ?>
            </tr>
          </tbody>
        </table>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

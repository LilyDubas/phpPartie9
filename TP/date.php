<?php
class date
{
  function getAll($year){
    $r = array();
    $date = strtotime($year.'-01-01');
    while (date('Y', $date)<= $year){
      //ce que je veux : $r (ANNEE)(MOIS)(JOUR) = JOUR DE LA SEMAINE
      $y = date ('Y', $date);
      $m = date ('n', $date);
      $d = date ('j', $date);
      $w = str_replace('0','7',date ('w', $date));
      $r[$y][$m][$d] = $w;
      $date = strtotime(date('Y,m,d', $date) . '+1DAY');
    };
  return $r;
}
}
?>

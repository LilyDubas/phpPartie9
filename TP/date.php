<?php
/**
*
*/
class Date
{
var $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
var $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

  function getAll($year){
    $r = array();

    /**
    * boucle version procédurale
    */
    // $date = strtotime($year.'-01-01');
    // while (date('Y', $date) <= $year) {
    //
    //
    //   $y = date('Y', $date);
    //   $m = date('n', $date);
    //   $d = date('j', $date);
    //   $w = str_replace(0, 7, date('w', $date));
    //   $r[$y][$m][$d] = $w;
    //   $date = strtotime(date('Y-m-d',$date) . '+1 DAY');
    //
    // }

    // boucle version orienté-objet

    $date = new DateTime($year.'-01-01');
    while ($date->format('Y') <= $year){


      $y = $date->format('Y');
      $m = $date->format('n');
      $d = $date->format('j');
      $w = str_replace(0, 7, $date->format('w'));
      $r[$y][$m][$d] = $w;
      $date->add(new DateInterval('P1D')); //P1D = Period 1 Day

    }
    return $r;
  }
}



?>

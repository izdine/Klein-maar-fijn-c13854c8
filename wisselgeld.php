<?php

  $invoer = ($argv[1]);
  $Geldeenheden = array("50","20","10","5","2","1");
  $centen = array("50","20","10","5");
  $Geld = intval($invoer);
  $cent = $invoer - $Geld;
  $cent = Intval(round($cent * 100));

  foreach ($Geldeenheden as $value) {
  $restgeld = floor($Geld / $value);
    if ($restgeld >= 1) {
      $Geld = $Geld - ($value * $restgeld);
      echo $restgeldGeld . " X €" . $value . " euro" . PHP_EOL;
   }
}
  foreach ($centen as $value) {
  $restcent = floor($cent / $value);
    if ($restcent >= 1) {
      $cent = $cent - ($value * $restcent);
      echo $restcent . " X €" . $value . " cent" . PHP_EOL;
      }
  }

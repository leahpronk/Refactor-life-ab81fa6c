<?php

  $invoer = ($argv[1]);
  $geldeenheden = array("50","20","10","5","2","1");
  $centen = array("50","20","10","5");
  $geld = intval($invoer);
  $cent = $invoer - $Geld;
  $cent = Intval(round($cent * 100));
  $cent = round($cent / 5) *5;
  $invoer = readline("hoeveel wil je betalen ");
  if (!is_numeric($invoer)) {
  exit ($invoer . " is geen geldige getal, probeer het opnieuw ");
}
  euro($geldeenheden, $geld);
function euro($geldeenheden, $geld)
{
  foreach ($geldeenheden as $value) {
  $restgeld = floor($Geld / $value);
    if ($restgeld >= 1) {
      $Geld = $Geld - ($value * $restgeld);
      echo $restgeldGeld . " X €" . $value . " euro" . PHP_EOL;
   }
  }
}
centen($centen, $cent);
function centen($centen, $cent)
{
  foreach ($centen as $value) {
  $restcent = floor($cent / $value);
    if ($restcent >= 1) {
      $cent = $cent - ($value * $restcent);
      echo $restcent . " X €" . $value . " cent" . PHP_EOL;
        }
      }
    }
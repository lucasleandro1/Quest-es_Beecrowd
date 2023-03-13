<?php
$ndelesmas = readline();
$vdaslesmas = readline();
$vdaslesmas = explode(" ", $vdaslesmas);
$maior = 0;

foreach($vdaslesmas as $v) {
  if ($maior < $v) {
    $maior = $v;
  }
}

if ($maior >= 20) {
  echo "3";
}else if ($maior >= 10 and $maior < 20) {
  echo "2";
}else {
  echo "1";
}
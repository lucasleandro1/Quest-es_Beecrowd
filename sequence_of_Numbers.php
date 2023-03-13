<?php
while (true) {
  $m = readline();
  $m = explode(" ",$m);
  $soma = 0;
  if($m[0]>$m[1]){
    $maior = $m[0];
    $menor = $m[1];
  }
  else{
    $maior = $m[1];
    $menor = $m[0];
  }
  if ($menor > 0) {
  for ($menor;$menor <= $maior;$menor++){
    $soma += $menor;
    echo"$menor ";
  }
  echo"Sum=$soma\n";
  }else {
    break;
  }
}
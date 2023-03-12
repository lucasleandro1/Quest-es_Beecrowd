<?php
$m = readline();
$m = explode(" ",$m);
if($m[0]>$m[1]){
  $maior = $m[0];
  $menor = $m[1];
}
else{
  $maior = $m[1];
  $menor = $m[0];
}
if($menor <= 0){
  exit;
}
for ($menor;$menor < $maior+1;$menor++){
  $soma += $menor;
  echo"$menor ";
}
echo"sum=$soma\n";
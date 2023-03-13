<?php
$x = readline();
$y = readline();
$soma = 0;
if ($x == $y){
  echo"0";
}
else if ($x > $y){
  $maior = $x;
  $menor = $y;
}
else{
  $maior = $y;
  $menor = $x;
}
$menor+=1;
while ($menor < $maior){
  if($menor %2 != 0){
    $soma+=$menor;
  }
  $menor+=1;
}
echo"$soma";

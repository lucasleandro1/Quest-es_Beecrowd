<?php
$v1 = readline();
$v2 = readline();
$x = 0;
if ($v1 > $v2){
    $menor = $v2;
    $maior = $v1;
}
else{
    $menor = $v1;
    $maior = $v2;
}
for ($menor+1;$menor < $maior;$menor++){
    if ($menor%5 == 2 or $menor%5==3){
      echo"$menor\n";
    }
}

<?php
$v1 = readline();
$v = $v1;
$contador100 = 0;
$contador50 = 0;
$contador20 = 0;
$contador10 = 0;
$contador5 = 0;
$contador2 = 0;
$contador1 = 0;
while($v1 > 0){
  if ($v1 >= 100){
    $v1 -= 100;
    $contador100++;
  }
  else if ($v1 >= 50){
    $v1 -= 50;
    $contador50++;
  }
  else if ($v1 >= 20){
    $v1 -= 20;
    $contador20++;
  }
  else if ($v1 >= 10){
    $v1 -= 10;
    $contador10++;
  }
  else if ($v1 >= 5){
    $v1 -= 5;
    $contador5++;
  }
  else if ($v1 >= 2){
    $v1 -= 2;
    $contador2++;
  }
  else{
    $v1 -= 1;
    $contador1++;
  }
}
echo"$v\n";
echo"$contador100 nota(s) de R$ 100,00\n";
echo"$contador50 nota(s) de R$ 50,00\n";
echo"$contador20 nota(s) de R$ 20,00\n";
echo"$contador10 nota(s) de R$ 10,00\n";
echo"$contador5 nota(s) de R$ 5,00\n";
echo"$contador2 nota(s) de R$ 2,00\n";
echo"$contador1 nota(s) de R$ 1,00\n";

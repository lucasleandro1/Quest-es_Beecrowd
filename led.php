<?php
$v1 = readline("informe um valor: ");
$numero = array();

for ($i = 0; $i<$v1;$i++){
  $numero = readline("informe um numero: \n");
  $tamanho = strlen($numero);
  $leds = 0;
  for ($j = 0;$j<$tamanho;$j++){
    if ($numero[$j] == '1'){
      $leds+=2;
    }
    else if ($numero[$j] == '2'){
      $leds+=5;
    }
    else if ($numero[$j] == '3'){
      $leds+=5;
    }
    else if ($numero[$j] == '4'){
      $leds+=4;
    }
    else if ($numero[$j] == '5'){
      $leds+=5;
    }
    else if ($valores[$j] == '6'){
      $leds+=6;
    }
    else if ($numero[$j] == '7'){
      $leds+=3;
    }
    else if ($numero[$j] == '8'){
      $leds+=7;
    }
    else if ($numero[$j] == '9'){
      $leds+=6;
    }
    else{
      $leds+=6;
    }

  }
  echo"$leds leds\n";
}

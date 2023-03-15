<?php
  $horas = readline();
  $horas = explode(" ", $horas);

  $h1 = $horas[0];
  $m1 = $horas[1];
  $h2 = $horas[2];
  $m2 = $horas[3];

  $inicio = 0;
  $fim = 0;

  if ($m1+$m2+$h1+$h2 == 0){
    exit;
  }
  if ($h1 == 0){
    $inicio = (24*60)+$m1;
  }else {
    $inicio = ($h1*60)+$m1;
  }

  if ($h2 == 0) {
    $fim = (24*60)+$m2;
  }else {
    $fim = ($h2*60)+$m2;
  }
  if ($fim>$inicio) {
    echo $fim - $inicio;
  }else {
    echo ((24*60)-($inicio-$fim));
  }
<?php
$n = readline();
$valores = array();
for ($i = 0; $i < $n; $i++) {
    $valores[$i] = readline();
}
sort($valores);
$pares = array();
$impares = array();
foreach ($valores as $valor) {
    if ($valor % 2 == 0) {
        $pares[] = $valor;
    } else {
        $impares[] = $valor;
    }
}
rsort($impares);
sort($pares);
foreach ($pares as $par) {
    echo $par . "\n";
}
foreach ($impares as $impar) {
    echo $impar . "\n";
} 


?>

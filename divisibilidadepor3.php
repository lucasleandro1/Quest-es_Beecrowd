<?php
$cases = [];
while (($input = readline()) !== false) {
    list($n, $m) = explode(" ", $input);
    $cases[] = [$n, $m];
}
foreach ($cases as $case) {
    list($n, $m) = $case;
    $n = intval($n);
    $length = strlen($m);
    $soma = 0;
    for ($i = 0; $i < $length; $i++) {
        $soma += (int) $m[$i];
    }
    $m = intval($m);
    $divisivel = $m % 3 == 0;
    if ($divisivel) {
        echo "$soma sim\n";
    } else {
        echo "$soma nao\n";
    }
}
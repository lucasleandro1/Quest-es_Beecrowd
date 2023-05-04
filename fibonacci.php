<?php
$fibo = readline();
$resposta = ((((1 + (5 ** 0.5)) * 0.5) ** $fibo) - (((1 - (5 ** 0.5)) * 0.5) ** $fibo))/(5 ** 0.5);
echo "$resposta.0\n";
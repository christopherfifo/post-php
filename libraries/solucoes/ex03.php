<?php

/*
 * 3. Escreva um programa em PHP que gere 10 números 
 * aleatórios e, depois os imprima em ordem crescente.
 */

// como gerar números aleatórios? função rand()
// qual é o limite máximo dos números aleatórios necessários? limite: 1 a 100
// como ordenar os elementos de um array? função sort()

echo '<br><br>Ex03 - Solução<br><br>';

$numeros = [];

for($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}

echo implode(' - ', $numeros).'<br><br>';

// agora o array números passa a ficar ordenado
sort($numeros);

echo implode(' - ', $numeros).'<br><br>';
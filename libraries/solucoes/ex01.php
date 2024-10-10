<?php 

// lista de números
$lista = [6, 4, 2, -10, 11, 8, 1];

// números na forma de string
$s = '';

// variáveis de controle
$posicao_menor_valor;
$menor_valor;

echo 'Lista de números e suas posições: <br>';
foreach ($lista as $key => $value) {
    $s .= "$key => $value <br>";  // operador e concatenação
}
echo $s.'<br><br>';

$menor_valor = $lista[0];
foreach ($lista as $key => $value) {
    if($value < $menor_valor){
        $menor_valor = $value;
        $posicao_menor_valor = $key + 1;
    }
}

echo "O menor valor da lista é: $menor_valor<br>";
echo "Este valor foi encontrado na posição: $posicao_menor_valor<br>";
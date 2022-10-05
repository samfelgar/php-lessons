<?php

/*

EXERCICIO 1

Considere as variáveis abaixo:

$fruit1 = 'orange';
$fruit2 = 'apple';

Você precisa trocar os valores entre as variáveis, de forma que a variável $fruit1 tenha o valor 'apple' e a variável $fruit2, 'orange'.
Regras:

- Atribuição direta não vale :)
- Você pode utilizar uma variável auxiliar

*/

$fruit1 = 'orange';
$fruit2 = 'apple';

$fruit = $fruit1;
$fruit1 = $fruit2;
$fruit2 = $fruit;

echo $fruit1;
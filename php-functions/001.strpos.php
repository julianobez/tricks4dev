<?php

/*
 * exemplo 1 - pesquisa simples
 */

$palheiro = "O rato roeu a roupa do rei de roma";
$agulha = "rato";

if(strpos($palheiro,$agulha)){
	echo "Encontrei a agulha !";
}



/*
 * exemplo 2 - pesquisa com offset
 */

$palheiro = "O rato roeu a roupa do rei de roma";
$agulha = "rato";

if(strpos($palheiro,$agulha, 1)){
	echo "Encontrei a agulha !";
}



/*
 * exemplo 3 - pesquisa com offset negativo
 */

$palheiro = "O rato roeu a roupa do rei de roma";
$agulha = "roma";

if(strpos($palheiro,$agulha, -6)){
	echo "Encontrei a agulha !";
}



/*
 * exemplo 4 - identificando a posição da string
 */

$palheiro = "O rato roeu a roupa do rei de roma";
$agulha = "roma";
$posição = strpos($palheiro,$agulha);

if($posição){
	echo "Encontrei a agulha na posição {$posição}!";
}



/*
 * exemplo 5 - pegadinha do falso negativo
 */

$palheiro = "O rato roeu a roupa do rei de roma";
$agulha = "O rato";
$posição = strpos($palheiro,$agulha);

/**
 * 0 é a representação binária do booleano FALSE. Verifique com --> echo var_dump((bool) 0);
 * 
 * Se a string está na posição 0(Zero), o if($posicao) acha que zero é false e retorna um falso negativo
 * 
 * Por isso, utilize um comparador "$posicao !== false" com 2 vezes o sinal (!==). Dessa forma o "if" compara valor e tipo de $posição
 * Ou seja:
 * - se o texto não for encontrado, strpos retorna o booleano FALSE e não entra no "if" condicional
 * - se o texto for encontrado encontrado na posição, strpos retorna o inteiro 0(zero) e entra no "if" condicional indicando a posição 0(zero)
 */
if($posição !== false){
	echo "Encontrei a agulha na posição {$posição}!";
}


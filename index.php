<?php

echo'aujourdhui il fait -1000 degrés';

$string='texte';

echo strtoupper($string);

echo ucfirst($string);

echo ucwords($string);

$string2='texte2';
echo ucfirst($string2);
echo strtolower($string2);

$string3='ceci est une chaine de caracteres';

echo str_word_count($string3);

$string4='Je m/appelle Jordan';
echo strrev($string4);
echo str_shuffle($string4);

$array=['ceci','est','un',"tableau"];
echo implode($array);

$string5='Bonsoir merci';

echo $string5;
echo strip_tags($string5);

$string6 = "ceci est mon message";
$count = strlen($string6);

while ($count <= 500){
    $string6 = "| " . $string6;

    $count = strlen($string6);
}
echo $string6;



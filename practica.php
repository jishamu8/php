<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
/*Operar con variables*/

echo "A. Defineix una variable de cada tipus: integer,double,string i boolean. Després"."<br>";
echo "imprimeix-les per pantalla."."<br>";
$int = 21;
echo "Integer es ".$int."<br>";
$double = 354.29;
echo "Double es ".$double."<br>";
$string = ("Hello World");
echo "String es ".$string."<br>";
$boo = True;
echo "Boolean es ".$boo."<br>"."<br>";


echo "B. Crea una altra variable string. Després:"."<br>";
echo "○ Imprimeix per pantalla el tamany(longitud) del dos strings."."<br>";
echo strlen ("Hello World")."<br>";

echo "○ Imprimeix per pantalla el dos strings però en ordre invers de caràcters."."<br>";
echo strrev ("Hello World")."<br>"."<br>";

echo "○ Imprimeix la concatenació dels dos strings."."<br>";
$variable1 = ("Hello World");
$variable2 = ("Hello PHP");
$concatenar = $variable1  . ', ' . $variable2;
echo $concatenar."<br>"."<br>";


echo "C. Crea una constant que inclogui el teu nom i imprimeix-la per pantalla."."<br>";
define("nombre","Joseph Ishamu");
echo nombre."<br>"."<br>";

echo "D. Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers."."<br>";
$int1 = array(1, 2, 3, 4, 5);
print_r($int1)."<br>";
$int2 = array(6, 7, 8);
print_r($int2)."<br>"."<br>";


echo "E. Afegeix un valor més a l'array que conté 3 integers."."<br>";
$int2 = array(6, 7, 8, 9);
print_r($int2)."<br>"."<br>";

echo "F. Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla."."<br>";

$m_arrays = array_merge($int1, $int2);
print_r ($m_arrays)."<br>";
$t_array = sizeof($m_arrays);
echo $t_array."<br>"."<br>";

echo "G. Imprimeix per pantalla (valor a valor) l'array resultant del nivell anterior."."<br>";

foreach ($m_arrays as $mezcla){
echo $mezcla."<br>"."<br>";
}

echo "H. Escriure un programa PHP que realitzi lo següent:
declarar dues variables X e Y de tipus int, dues variables N i M de tipous
double i assigna a cada una un valor. A continuació, mostra per pantalla, per
a X e Y:"."<br>";
echo "○ El valor de cada variable"."<br>"; 
echo "○ La suma"."<br>";
echo "○ La resta"."<br>";
echo "○ El producte"."<br>"; 
echo "○ La divisió"."<br>" ;
echo "○ El mòdul, per a N i M, lo mateix."."<br>";
echo "I per a totes les variables(X,Y,N,M):"."<br>" ;
echo "○ El doble de cada variable"."<br>" ;
echo "○ La suma de totes les variables"."<br>";
echo "○ El producte de totes les variables"."<br>";


$variable_X = 21;
$variable_Y = 25;
$variable_M = 43.2;
$variable_N = 33.8;
echo ("Esto es variable X: ". $variable_X. " y esto es variable Y: ". $variable_Y ."<br>");
echo ("Esto es la suma de X y Y: ". $variable_X + $variable_Y ."<br>");
echo ("Esto es la resta de X y Y: ". $variable_X - $variable_Y ."<br>");
echo ("Esto es el producto de X y Y: ". $variable_X * $variable_Y ."<br>");
echo ("Esto es la división de X y Y: ". $variable_X / $variable_Y ."<br>");
echo ("Esto es el módulo de X y Y: ". $variable_X % $variable_Y ."<br>");
echo ("Esto es variable M: ". $variable_M. " y esto es variableN: ". $variable_N ."<br>");
echo ("Esto es la suma de M y N: ". $variable_M + $variable_N ."<br>");
echo ("Esto es la resta de M y N: ". $variable_M - $variable_N ."<br>");
echo ("Esto es el producto de M y N: ". $variable_M * $variable_N ."<br>");
echo ("Esto es la división de M y N: ". $variable_M / $variable_N ."<br>");
echo ("Esto es el módulo de M y N: ". $variable_M % $variable_N ."<br>");
echo ("Esto es el doble de la variable X: ". $variable_X * 2 ."<br>");
echo ("Esto es el doble de la variable Y: ". $variable_Y * 2 ."<br>");
echo ("Esto es el doble de la variable M: ". $variable_M * 2 ."<br>");
echo ("Esto es el doble de la variable N: ". $variable_N * 2 ."<br>");
echo ("Esto es la suma de todas las variables: ". $variable_X + $variable_Y +
$variable_M + $variable_N ."<br>");
echo ("Esto es el producto de todas las variables: ". $variable_X * $variable_Y *
$variable_M * $variable_N ."<br>");
?>
</body>
</html>

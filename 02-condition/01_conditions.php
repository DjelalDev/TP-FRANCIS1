<?php

$a = 10;
$b = 15;
$c = 20;
$d = 25;
$e = 30;

// if/else
// dans la parenthèse du if, on indique la condition
if($a < $b){
    echo "$a est bien inférieur à $b <br>";
    // le else englobe tous les autres cas de figure qui ne respectent pas la condition
}else{
    echo "C'est faux";
}
// A noter que coder le else n'est pas une obligation
// je peux juste demander à tester le if, qui si il est respecté, exécute le code dans son bloc d'instruction. Mais si il n'est pas respecté, je m'en fiche, je passe à la suite du script

// if/else + AND
// pour tomber dans le bloc TRUE de la condition, les deux conditions doivent etre respectées en même temps
if($a < $b && $c> $d){
    echo "Les deux instructions sont respectées";
}else{
    echo "Faux, une des deux instructions n'est pas respectée <br>";
}

// if/else + OR 
// le || OR fait basculer dans le bloc TRUE si une des conditions est respectée (pas necessairement toutes)
if($a < $b || $c> $d){
    echo "Vrai, un des deux conditions est respectées <br>";
}else{
    echo "Faux";
}

// XOR (OR exclusif)
// on utilise XOR dans des cas de figures très rares, lorsqu'on ne veut pas que tout ce que l'on teste soit VRAI
// si seulement une des conditions est vraie, alors XOR dirige vers le bloc TRUE
// Dans le cas ci-dessous, les deux conditions testées sont vraies, alors XOR dirige vers le bloc FALSE (utilisé surtout dans les langages d'application /robotique et très peu en langages web)
if($a < $b XOR $c < $d){
    echo "Vrai";
}else{
    echo "Faux <br>";
}

// condition contractée (ternaire)
echo ($d > $e) ? "Vrai, $d est supérieur à $e" : "Faux, il est inférieur <br>";
// la ternaire ci-dessus est équivalente à la condition développée en plus long juste après
// if($d > $e){
//     echo "Vrai, $d est supérieur à $e";
// }else{
//     echo "Faux, il est inférieur";
// }

// == versus ===

$var1 = 20;
$var2 = "20";

// le double = teste la valeur
if($var1 == $var2){
    echo "Les deux valeurs sont égales <br>";
}else{
    echo "Faux, ce ne sont pas les mêmes";
}

// le triple = teste en plus de la valeur, le type (ici, un integer et un string, on est donc versé dans le false)
if($var1 === $var2){
    echo "Les deux valeurs sont égales";
}else{
    echo "Faux, ce ne sont pas les mêmes types<br>";
}

// isset
// isset est une fonction prédéfinie php qui permet de tester si qlq chose existe. Elle attend donc dans sa parenthèse en parametre (ce qu'elle doit tester)
// si la condition doit tester l'existence d'une constante, alors on ne pourra utiliser isset, mais defined()
if(isset($phrase)){
    echo "Cette variable existe";
}else{
    echo "Cette variable n'a pas été declarée <br>";
}

// ci dessous, la ternaire équivalente à la condition du dessus
// echo (isset($phrase)) ? "Cette variable existe" : "Cette variable n'a pas été declarée <br>";
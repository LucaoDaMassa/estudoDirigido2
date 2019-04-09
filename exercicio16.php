<?php

print "Insira o primeiro número: \n";
$n1= (float) fgets (STDIN);

print "Insira o segundo número: \n";
$n2= (float) fgets (STDIN);

print "Insira o terceiro número: \n";
$n3= (float) fgets (STDIN);

print "Insira o quarto número: \n";
$n4= (float) fgets (STDIN);

print "Insira o quinto número: \n";
$n5= (float) fgets (STDIN);

$soma= $n1+$n2+$n3+$n4+$n5;

$media= $soma/5;

print "A soma dos números é $soma e a média é $media. \n";
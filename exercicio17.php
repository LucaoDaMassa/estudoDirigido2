<?php

print "Insira o valor da base: \n";
$base= (float) fgets (STDIN);

print "Insira o valor do expoente: \n";
$expoente= (float) fgets (STDIN);

$potencia=1;

for ($cont=0; $cont<$expoente; $cont++) 

{ $potencia=$potencia*$base; }

print "$base elevado a $expoente é igual a $potencia. \n";

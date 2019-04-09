<?php

print "Insira o primeiro valor: \n";
$a= (float) fgets (STDIN);

print "Insira o segundo valor: \n";
$b= (float) fgets (STDIN);

print "Insira o terceiro valor: \n";
$c= (float) fgets (STDIN);

if ($a>$c & $c>$b){
	print "$a, $c e $b. \n";
}

elseif ($a>$b & $b>$c){
	print "$a, $b e $c. \n";
}

elseif ($b>$a & $a>$c){
	print "$b, $a e $c. \n";
}

elseif ($b>$c & $c>$a){
	print "$b, $c e $a. \n";
}

elseif ($c>$a & $a>$b){
	print "$c, $a e $b. \n";
}

elseif ($c>$b & $b>$a){
	print "$c, $b e $a. \n";
}
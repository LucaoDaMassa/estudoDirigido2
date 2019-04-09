<?php

$par=0;
$impar=0;

for ($cont=1; $cont<11; $cont++){
	
	print "Insira o " .$cont. "° número: \n";
	$numero= (float) fgets (STDIN);

if ($numero%2==0){
	$par=$par+1;
}
elseif ($numero%2==1){
	$impar=$impar+1;
}
}

print "Quantidade de número(s) par(es): $par. \n";
print "Quantidade de número(s) ímpar(es): $impar. \n";
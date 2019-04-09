<?php

$cont==0;

print "Insira o 1° número: \n";
$maior= (float) fgets (STDIN);

while ($cont<5) {
	$cont++;
	
	print "Insira o ".$cont. "° número: \n";
	$numero=(float) fgets (STDIN);

	if ($numero>$maior) {
		
		$maior=$numero;
	}
	}

	print "o maior valor é $maior. \n";

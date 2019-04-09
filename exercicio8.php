<?php

print "Insira o preço, em reais, do primeiro produto: \n";
$prod1= (float) fgets (STDIN);

print "Insira o preço, em reais, do segundo produto: \n";
$prod2= (float) fgets (STDIN);

print "Insira o preço, em reais, do terceiro produto: \n";
$prod3= (float) fgets (STDIN);

if ($prod1<$prod2 & $prod1<$prod3){
	print "Você deverá escolher o primeiro produto, pois é mais barato. \n";
}

elseif ($prod2<$prod1 & $prod2<$prod3){
	print "Você deverá escolher o segundo produto, pois é mais barato. \n";
}

elseif ($prod3<$prod1 & $prod3<$prod2){
	print "Você deverá escolher o terceiro produto, pois é mais barato. \n";
}

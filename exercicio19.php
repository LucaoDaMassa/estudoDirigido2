<?php

print "0 "; //sempre começa pelo 0

$ant=1; //numero anterior
$ult=0; //ultimo numero

while ($ult<500){
	
	$ult= $ant+$ult;
	
	$ant= $ult-$ant;
		
		if ($ult<500){
		print "$ult ";
		}
		}

		print "\n";
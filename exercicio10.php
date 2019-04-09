<?php

print "Digite o valor de a: ";
$a= (float) fgets(STDIN);

if ($a==0){

    print "A equação não é do seundo grau. \n";
}

else {

    print "Digite o valor de b: \n";
    $b= (float) fgets(STDIN);

    print "Digite c: ";
    $c= (float) fgets(STDIN);

    $delta= ($b**2)-(4*$a*$c);
    $x1= (-$b-sqrt($delta))/(2*$a);
    $x2= (-$b+sqrt($delta))/(2*$a);
    $xSemDelta=(-$b)/(2*$a);

        if ($delta==0){
            print "A equação possui apenas uma raíz real, o resultado é: $xSemDelta. \n";
        }

        elseif ($delta<0){
            print "A equação não possui raízes reais, pois o delta é negativo. \n";
        }

        elseif ($delta>0){
            print "A equação possuis duas raízes: \n";
            print "primeira raíz=$x1. \n.";
            print "segunda raíz=$x2. \n";
        }
    }

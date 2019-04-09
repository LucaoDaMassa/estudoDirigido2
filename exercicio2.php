<?php

    print "Insira um valor diferente de 0 (zero): ";
    $a= (float) fgets (STDIN);

    if ($a>0) {
        print "$a é positivo. \n";
    }    
    else {
        print "$a é negativo. \n";
    }
<?php

    print "Insira o primeiro valor: ";
    $a= (float) fgets (STDIN);

    print "Insira o segundo valor: ";
    $b= (float) fgets (STDIN);

    if ($a>$b) {
        print "$a é maior que $b. \n";
    }
    else {
        print "$b é maior que $a. \n";
    }
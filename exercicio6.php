<?php

    print "Insira o primeiro valor: ";
    $a= (float) fgets (STDIN);

    print "Insira o segundo valor: ";
    $b= (float) fgets (STDIN);

    print "Insira o terceiro valor: ";
    $c= (float) fgets (STDIN);

        if ($a>$b and $a>$c) {
            print "$a é maior que $b e $c. \n";
        }
        elseif ($b>$a and $b>$c) {
            print "$b é maior que $a e $c. \n";
        }
        else {
            print "$c é maior que $a e $b \n";
        }

        
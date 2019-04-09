<?php

    print "Insira o primeiro valor: ";
    $a= (float) fgets (STDIN);

    print "Insira o segundo valor: ";
    $b= (float) fgets (STDIN);

    print "Insira o terceiro valor: ";
    $c= (float) fgets (STDIN);

        if ($a>$b & $b>$c){
            print "$a é o maior valor e $c é o menor valor. \n";
        }

        elseif ($a>$c & $c>$b){
            print "$a é o maior valor e $b é o menor valor.\n";
        } 

        elseif ($b>$a & $a>$c) {
            print "$b é o maior número e $c é o menor valor.\n";
        }   

        elseif ($b>$c & $c>$a){
            print "$b é o maior valor e $a é o menor valor.\n";
        }

        elseif ($c>$b & $b>$a){
             print "$c é o maior valor e $a é o menor valor.\n";
        }     
        

        elseif ($c>$a & $a>$b){
            print "$c é o maior valor e $b é o menor valor.\n";
        }    
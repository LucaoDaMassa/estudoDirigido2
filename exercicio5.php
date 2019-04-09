<?php

    print "Insira a primeira nota: ";
    $n1= (float) fgets (STDIN);

    print "Insira a segunda nota: ";
    $n2= (float) fgets (STDIN);

    $media= ($n1+$n2)/2;

    if ($media>=7 & $media<10) {
        print "o aluno está APROVADO. \n";
    }
    elseif ($media<7) {
        print "o aluno está REPROVADO. \n";
    } 
    elseif ($media=10) {
        print "o aluno está APROVADO COM DISTINÇÃO. \n";
    }

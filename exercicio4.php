<?php

    print "Insira uma letra do alfabeto: ";
    $letra= fgetc (STDIN);

    if ($letra=="a" or $letra=="e" or $letra=="i" or $letra=="o" or $letra=="u"){
        print "a letra digitada é uma vogal. \n";
    }
    else {
        print "a letra digitada é uma consoante. \n";
    }
<?php

//Rimuove righe vuote da un file di testo.

file_put_contents('1new.log',
    preg_replace(
        '~[\r\n]+~',
        "\r\n",
        trim(file_get_contents('1.log'))
    )
);

file_put_contents('2new.log',
    preg_replace(
        '~[\r\n]+~',
        "\r\n",
        trim(file_get_contents('2.log'))
    )
);

file_put_contents('3new.log',
    preg_replace(
        '~[\r\n]+~',
        "\r\n",
        trim(file_get_contents('3.log'))
    )
);


print("done");

        
?>
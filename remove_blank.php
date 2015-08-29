<?php

//Rimuove righe vuote da un file di testo.

file_put_contents('newfile.log',
    preg_replace(
        '~[\r\n]+~',
        "\r\n",
        trim(file_get_contents('file.log'))
    )
);


print("done");

        
?>

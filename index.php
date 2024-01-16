<?php 

    require __DIR__ . '/model/movie.php';

    $shrek = new movie();
    $shrek->$name = "ciao";   
    $shrek->$filmMaker = "ciao";
    $shrek->$language = "ciao";   

    var_dump($shrek);
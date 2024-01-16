<?php 

    require __DIR__ . '/model/movies.php';

    $shrek= new Movie();
    $shrek->name="ritoieno al fututoe";
    $shrek->language="ing";
    $shrek->movieMaker="speke lee";


/*     var_dump($shrek);
 */    
    echo $shrek->cliper();

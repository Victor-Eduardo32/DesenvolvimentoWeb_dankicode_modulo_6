<?php 

    $nome = 'Victor';

    /*
    switch($nome){
        case 'Victor':
            echo 'Minha variavel é victor';
            break;
        case 'Joao';
            echo 'Minha variavel é Joao';
            break;
    }
    */

    //Break para loop: for, while, do e foreach
    //Break também utilizamos no switch
    //Continue para loop: for, while, do e foreach

    for($i = 0; $i < 10; $i++){
        /*
        if($i == 5 || $i == 9)
            continue;
        */
        echo $i; 
        echo '<hr>';
        /*
        if($i ==5)
            break;
        */
    }

?>
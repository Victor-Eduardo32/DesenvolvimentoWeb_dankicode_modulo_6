<?php 

    $nome = 'victor';
    if($nome == 'victor'):
        echo 'Verdade';
        echo '<br />';
    endif;
    
    $contador = 0;
    while($contador < 10):
        $contador++;
        echo 'oi';
        echo '<br />';
    endwhile;  

    $array = array();
    foreach ($array as $key => $value):
        # code...
    endforeach;

    for ($i=0; $i < 10; $i++):
        # code...
    endfor;
?>
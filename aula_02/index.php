<?php 

    // Arrays Single

    $arr = ['Guilherme', 'João'];
    $arr = array('Guilherme', 'chave2' => 'João');

    $arr[0] = 'guilherme';
    $arr[] = 'joao';

    // Arrays Multidimensionais

    //$arr2 = array(array('Guilherme', 'João'), array(23, 45));

    //$arr2[0] = array('Guilherme', 'João');
    //$arr2[1] = array(25, 45);

    $arr2[0]['chave1'] = 'Guilherme';

    echo $arr2[0]['chave1'];

?>
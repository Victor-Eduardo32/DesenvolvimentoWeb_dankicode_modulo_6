<?php 

    //Serve para unir 1 ou mais arrays
    /*
    $array1 = array("chave1" => "valor1", "chave2"=>"valor");
    $array2 = array("chave3"=>"valor3","chave4"=>"valor4");
    $result = array_merge($array1, $array2);
    print_r($result);
    */

    //Array intersect key serve para retornar valor com a mesma chave em 1 ou mais arrays
    /*
    $array1 = array("chave1" => "valor1", "chave2"=>"valor");
    $array2 = array("chave1" => "outrovalor","chave3"=>"valor3","chave4"=>"valor4");

    print_r(array_intersect_key($array1, $array2));
    */

    //Array map serve para aplicar uma função em todos os valores do array
    /*
    $arr = ['<p>guilherme</p>', 'victor', '<h1>joao</h1>'];

    print_r(array_map('strip_tags', $arr));
    */

?>
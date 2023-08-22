<?php 

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at sem ac libero cursus fringilla. Duis sed purus libero. Curabitur id vulputate est. Nulla facilisi. Vivamus id risus arcu. Integer commodo varius odio, in accumsan turpis finibus quis. Quisque interdum tellus feugiat erat tincidunt semper. Nulla tempus mauris eget arcu scelerisque, cursus bibendum augue bibendum. Maecenas ligula mauris, varius at gravida sit amet, pharetra vitae sapien. Fusce viverra enim urna, eu tincidunt nisl dapibus id. Vestibulum dictum turpis sed lacus venenatis lobortis. Etiam dolor nulla, ultrices sit amet lacus vitae, congue posuere neque. Nunc tellus sapien, tincidunt id purus nec, porttitor auctor arcu. Morbi eleifend consequat nisi. Donec nec bibendum lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus.';


    //serve para recortar uma string
    //echo substr($conteudo,0,20);


    $nome = 'Victor Eduardo Mota';

    $nomes = explode(' ', $nome);

    //print_r($nomes);

    //Serve pra juntar um array com um delimitador
    //No caso o espaço
    $nomes = implode(' ', $nomes);

    //echo $nomes;

    //Strip_tags serve pra tirar todo código HTML
    $conteudo = '<h1>Victor</h1> Eduardo';

    //echo strip_tags($conteudo);

    //htmlentities que mostra o código html na página

    echo htmlentities('<div></div>'); 
?>
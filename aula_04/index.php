<?php 
    function mostrarNome($nome,$idade){
        echo '<h2>Meu nome é: </h2>'.$nome;
        echo "<br />Idade: $idade";
    }

    function calculadora($num1 = 10,$num2 = 5){
        echo $num1 + $num2;
    }

    function verdade(){
        return true;
    }

    function retornarString(){
        return 'Guilherme';
    }

    echo retornarString();

    //calculadora();

?>
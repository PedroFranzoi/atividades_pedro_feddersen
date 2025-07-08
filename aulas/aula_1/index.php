<?php

    $mensagem = 'Olá mundo!';

    echo $mensagem;

    echo '<h2>Olá mundo!</h2>';

    $primeiro_nome = 'Pedro';
    $idade = 17;
    $gosta_de_bolo = true;

    $resultado_ano = 2025 - $idade;

    echo $resultado_ano;

    echo '<br>';

    $numero = 37.5;

    echo $numero;

    $numero2 = (int) $numero;
    echo '<br>';

    echo $numero2;

    $nota = 8;

    if($nota >= 7){
        echo '<p>Passou na prova.</p>';
    }else if($nota == 'galinha'){
        echo '<p>Como você fez isso?</p>';
    }
    else{
        echo '<p>Não passou na prova</p>';
    };

    for($i = 0; $i <= 5; $i++){

        //echo '<p>Contagem: '. $i . '</p>';

        echo "<p>Contagem: $i</p>";

    };


    $frutas = array('Laranja', 'Banana', 'Tomate', 'Bergamota');

    echo $frutas[0];

    function saudacoes($nome){
        return "Olá $nome";
    };

    echo '<br>';
    echo saudacoes('Pedro');

?>
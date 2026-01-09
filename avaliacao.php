<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $nota = $_POST["nota"];

    if($nome == true){
        echo "Aluno:$nome<br>";
    }else{
        echo "Informe seu nome<br>";
    }

    if($idade == true){
        echo "Idade:$idade<br>";
    }else{
        echo "Informe sua idade<br>";
    }

    if(is_numeric($nota) && $nota >= 0 && $nota <= 10){
    if($nota >= 7){
        echo "Sua nota foi $nota voce está Aprovado";
    }elseif($nota >=5 && $nota < 7){
        echo "Sua nota foi $nota voce está de Recuperação";
    }elseif($nota < 5){
        echo "Sua nota foi $nota voce está Reprovado";
    }else{
        echo "Informe sua nota";
    }
}
}
?>
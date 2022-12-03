<?php include("./cabecalho.php"); ?>
    <div class="col-md-8 offset-md-2 col-sm-12">
        <h1>Simulado</h1>   
<?php

include "conexao.php";
if( isset ($_POST) && !empty($_POST)){
    $pergunta = $_POST["pergunta"];
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];
    $d = $_POST["D"];
    $e = $_POST["E"];
    $correta = $_POST["correta"];

    if($correta == null){
        ?>
        <div class="alert alert-danger" role="alert">
            
        </div>
        <?php
        $_POST["correta"] = null;
    }

    $query = "insert into questoes (pergunta,a,b,c,d,e,correta)";
    $query = $query." values('$pergunta','$a', '$b', '$c', '$d', '$e', '$correta')";
    $resultado = mysqli_query($conexao, $query);
}

?>
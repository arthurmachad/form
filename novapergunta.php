<?php include("./cabecalho.php"); ?>
    <div class="col-md-8 offset-md-2 col-sm-12">
        <h1>Criar Perguntas</h1>

        
        </div>
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
            Selecione a alternativa correta
        </div>
        <?php
        $_POST["correta"] = null;
    } 

    $query = "insert into questoes (pergunta,a,b,c,d,e,correta)";
    $query = $query." values('$pergunta','$a', '$b', '$c', '$d', '$e', '$correta')";
    $resultado = mysqli_query($conexao, $query);
}


?>


<form action="./novaPergunta.php" method="post">
<div class="col-md-8 offset-md-2 col-sm-12">
<div class="card mt-3 ml-3">
    <div class="card-header">

<label for="Pergunta">Pergunta:</label>
<textarea name="pergunta"></textarea>

</div>
<br><br>

<p>
<label>A-)</label>
<input type="radio" name="correta" value="A"/>
<input type="text" name="A" />

<br><br>

<label>B-)</label>
<input type="radio" name="correta" value="B" />
<input type="text" name="B" />

<br><br>

<label>C-)</label>
<input type="radio" name="correta" value="C" />
<input type="text" name="C" />

<br><br>

<label>D-)</label>
<input type="radio" name="correta" value="D" />
<input type="text" name="D" />

<br><br>

<label>E-)</label>
<input type="radio" name="correta" value="E" />
<input type="text" name="E" />

<br><br>
</p>




</div>
<br><br>
<button type="submit" class="btn btn-primary">Salvar Pergunta</button>
</div>

</form>



        <?php include("./rodape.php"); ?>
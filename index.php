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


    $query = "insert into questoes (pergunta,a,b,c,d,e,correta)";
    $query = $query." values('$pergunta','$a', '$b', '$c', '$d', '$e', '$correta')";
    $resultado = mysqli_query($conexao, $query);
}

?>


<form action="form-action.php" method="post">
<?php

$query = "select * from questoes order by rand() desc limit 15";
$resultado = mysqli_query($conexao, $query);
$pontuacao = 0;

while($linha = mysqli_fetch_array($resultado)){
    ?>
    <div class="card mt-3 ml-3">
    <div class="card-header">
    <h1> <?php echo $linha["pergunta"]; ?> </h1>
    </div>
    <br>
  <p>
    <input type="radio" name="<?php echo $linha["id"]; ?>" value="a" /> A-) <?php echo $linha["a"]; ?>
    <br>
    <br>
    <input type="radio" name="<?php echo $linha["id"]; ?>" value="b" /> B-) <?php echo $linha["b"]; ?>
    <br>
    <br>
    <input type="radio" name="<?php echo $linha["id"]; ?>" value="c" /> C-) <?php echo $linha["c"]; ?>
    <br>
    <br>
    <input type="radio" name="<?php echo $linha["id"]; ?>" value="d" /> D-) <?php echo $linha["d"]; ?>
    <br>
    <br>
    <input type="radio" name="<?php echo $linha["id"] ?>" value="e" /> E-) <?php echo $linha["e"]; ?>
    <br>
    <br>
</p>

    

</div>
    <?php
   
}



?>
<br><br>
   <button type="submit"  class="btn btn-primary">Enviar Perguntas</button>
<br><br>

        <?php include("./rodape.php"); ?>

        
        </form>
        </div>
</body>
</html>
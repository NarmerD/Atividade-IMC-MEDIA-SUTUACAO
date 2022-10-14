<html>
<?php

if (isset($_GET['Enviar'])){

    $nome = $_GET["nome"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota1 = str_replace(",",".",$nota1);
    $nota2 = str_replace(",",".",$nota2);
    $media = ($nota1 + $nota2)/2;
    
    echo "<h1>Situação do Aluno</h1>";
    echo "<strong>Nome:</strong> $nome<br><br>";
    echo "<strong>Média:</strong> $media<br><br>";

    if ($media>=6){
            echo "<strong>Situação:</strong> Aprovado";
        } elseif ($media>=4){
            echo "<strong>Situação:</strong> Exame final";
        } else {
            echo "<strong>Situação:</strong> Reprovado";
        }
}
?>
<br><br><a href="../index.html">Clique aqui para voltar a Pagina Inicial</a>
</html>
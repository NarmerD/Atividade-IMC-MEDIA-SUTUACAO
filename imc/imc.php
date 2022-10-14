<html>
<?php

    if (isset($_GET['Enviar'])){

        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        $peso = str_replace(",",".",$peso);
        $altura = str_replace(",",".",$altura);

        $imc = $peso/($altura*$altura);

        $imc = number_format($imc,2,",",".");

        echo "<h1>Situação</h1>";
        echo "Imc: $imc <br><br>";

        if($imc < 17){
            echo "Situação: Muito abaixo do peso.";
        } elseif ($imc >= 17 and $imc < 18.5){
            echo "Situação: Abaixo do peso.";
        } elseif ($imc >= 18.5 and $imc < 24.5){
            echo "Situação: Peso normal.";
        } elseif ($imc >= 25 and $imc < 30){
            echo "Situação: Acima do peso.";
        } elseif ($imc >= 30 and $imc < 35){
            echo "Situação: Obesidade 1.";
        } elseif ($imc >= 35 and $imc < 40){
            echo "Situação: Obesidade 2.";
        } else {
            echo "Situação: Obesidade 3.";
        }
    }
?>
<br><br><a href="../index.html">Clique aqui para voltar a Pagina Inicial</a>
</html>
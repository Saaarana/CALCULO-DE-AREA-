<?php

// DECLARANDO VARIAVEL E DADOS

$vPi = pi ();
$vRaio = (float) null;
$result = (float) null;

// BOTAO CALC CLICADO?

if(isset($_GET['btnCalc']))
{

    $vRaio = $_GET['text1'];

    // ENTRADA E ERRO DE CX VAZIA

    if($vRaio =='') {
        echo('<script> alert ("Caixa vazia não deve calcular!!!!")</script>');
    } else 
    {
        //ERRO SE O VALOR FOR NUMERICO

        if(is_numeric($vRaio))
        {
            $result = $vPi * ($vRaio * $vRaio);
        } else
        {
            echo('<script> alert("Digite numero valido")</script>');
        }

    }

}


?>

<html>
    <head>
        <title>Atividade</title>
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculo Area do Circulo
            </div>

            <div id="form">
                <form name="frmcalculadora" method="get" action="circulo.php">
						Qual é o Raio:<input type="text" name="text1" value="<?= $vRaio?>" > <br>
                        <input type="submit" name="btnCalc" value="Calcular">
						<div id="resultado">
						  O Valor é : <?= $result; ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>


<?php

 include ("header.php"); 
 include ("./assets/js/funcoes.php");

echo "<body>";
echo "<div class='features-clean'>";
echo "<div class='container'>";
echo "<a href='JavaScript:location.reload(true);'>Gerar Novo Array</a><br/>";


    $arrayA = geraNumero();
    echo "<b>O array gerado foi:</b> ";
    var_dump($arrayA);

    echo "<b>O valor da Terceira posicao deste array e: {$arrayA[2]}</b><br/>";

    $arrayB = implode(",", $arrayA);
    echo "<b>Este array impresso em string fica assim: {$arrayB}</b><br/>";

    $arrayC = explode(",", $arrayB);
    echo "<b>Apagando o primeiro Array e gerando um novo, atraves da string acima:</b>";
    var_dump($arrayC);
    unset($arrayA);

    if (in_array(14, $arrayC)) {
        echo "O Numero 14 esta no array! <br/>";
    } else {
        echo "O Numero 14 nao esta no array! <br/>";
    }

    foreach($arrayC as $key => $valor) {
        if ($key != 0) {
            if ($valor < $arrayC[$key-1]) {
                $excluir[] = $arrayC[$key];
            }
        }
    }

    $arrayD = array_diff($arrayC, $excluir);
    echo "<b>O Novo array apos excluir os numeros menores que os anteriores fica assim:</b>";
    var_dump($arrayD);

    $arrayE = array_pop($arrayD);
    echo "<b>Removendo a ultima posicao deste array, fica assim:</b>";
    var_dump($arrayD);

    echo "<b>Este array contem " . count($arrayD) . " elementos! </b><br/>";

    $arrayD = array_reverse($arrayD);
    echo "<b>Este array invertido, fica desta forma: </b>";
    var_dump($arrayD);

echo "</div>";
echo "</div>";

?>

<div class="text-center">
    <div class="card-footer mx-auto">
        <a href="./menu.php">Menu</a>
    </div>
</div>
</body>
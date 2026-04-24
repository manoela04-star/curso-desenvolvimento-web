<html>

<head>
    <meta charset="UTF-8">
    <title>Atividade - Idade</title>
</head>

<body>


<?php

$idade = 60 ;
function faixa_etararia($idade){
    if ($idade  <= 1) {
        echo "Essa pessoa é um bebe";
    } elseif ( $idade <18) {
        echo "Essa pessoa é menor de idade";
    } elseif ($idade <59) {
        echo "Essa maior de idade";
    } else {
        echo "Essa pessoa é um idoso";
    }
}
faixa_etararia($idade);

?>


</body>

</html>

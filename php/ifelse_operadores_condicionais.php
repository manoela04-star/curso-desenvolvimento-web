<html>

<head>
    <meta charset="utf-8" />
    <title>If_Else - Operadores Condicionais</title>
</head>

<body>



    <!--
        ==Igual
        === operador identico - Verifica se os valores sao iguas e se sao do mesmo tipo
        != ou <> operador diferente
        nao identico
        < verifica se o valor da esquerda é menor q o da direita
        > verifica se o valor da direita é maior q o da esqueda
        <= verifica se o valor a esquerda é menor ou igual ao da direita 
    -->


    <h3>igual</h3>
    <?php
        if (2 == 2) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>


    <h3>identico</h3>
    <?php
        if (2 === '2') {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>

    <h3>diferente</h3>
    <?php
        if ('x' != 'y') {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if ('x' != 'x') {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>

    <h3>nao identico</h3>
    <?php
        if (5 !== 6) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (5 !== '5') {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (5 !== 5) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>

    <h3>valor menor q o da direita</h3>
    <?php
        if (2 < 18) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (18 < 18) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (25 < 18) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>

    <h3>valor maior q o da esqueda</h3>
    <?php
        if (25 > 18) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }


        if (25 > 25) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (25 > 30) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>

    <h3>valor menor ou igual ao da esqueda</h3>
    <?php
        if (25 <= 30) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (25 <= 25) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (30 <= 25) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>

    <h3>valor maior ou igual ao valor da direita</h3>
    <?php
        if (25 >= 15) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (25 >= 25) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }

        if (-17 >= 25) {
            echo 'verdadeiro<br>';
        } else {
            echo 'falso<br>';
        }
    ?>

</body>

</html>
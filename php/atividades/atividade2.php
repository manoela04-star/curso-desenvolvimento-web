<html>

<head>
    <meta charset="UTF-8">
    <title>Atividade - Calcular IR</title>
</head>

<body>


<?php

function calcularIR($salario) {

    if ($salario <= 1903.98) {
        $imposto = 0;

    } elseif ($salario >=1903.99 && $salario <= 2826.65) {
            $imposto = ($salario * 7.5) / 100;

    } elseif ($salario >= 2826.65 && $salario <= 3751.05) {
            $imposto = ($salario * 15) / 100;

    } elseif ($salario >= 3751.05 && $salario <= 4664.68) {
            $imposto = ($salario * 22.5) / 100;

    } else {
        $imposto = $salario * 27.5 / 100;
    }

    return $imposto;
}
$salario = 600;

$ir = calcularIR($salario);

echo "Salário: R$ " . $salario . "<br>";
echo "Imposto: R$ " . $ir;
?>


</body>

</html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Banco de sangue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">

        <h3 class="text-danger fw-bold mb-3">
            🩸 Requisitos para doar sangue
        </h3>

        <ul class="list-group mb-4">
            <li class="list-group-item">Ter entre 16 e 69 anos</li>
            <li class="list-group-item">Peso superior a 50kg</li>
        </ul>

        <h4 class="mb-2">Pedro:</h4>

        <ul class="list-group mb-3">
            <li class="list-group-item">Tem 20 anos <br> Pesa 60kg</li>
        </ul>

        <div class="mt-2">
            <?php

            $idade = 20;
            $peso = 60;

            if ( ($idade >= 16 && $idade <= 69) && $peso >= 50) {
                echo '<span class=" d-block text-success text-center fw-bold">Atende aos requisitos!</span>';
            } else{
                echo '<span class=" d-block text-danger text-center fw-bold">Não atende aos requisitos!</span>';
            }

            ?>
        </div>

    </div>
</body>
</html>



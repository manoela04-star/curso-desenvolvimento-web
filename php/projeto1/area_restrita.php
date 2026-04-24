<?php
session_start();

//$_SESSION["auth"] = true;


$auth = $_SESSION['auth'];


if($auth != true) {
    unset($_SESSION['auth']);

    header("location: login.php");

    exit();
}

var_dump($auth);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Area restrita</title>
</head>


<body>

    <h1>Area Restrita</h1>

    <a href="index.php">Pagina Inicial</a> <br>
    <a href="area_restrita.php">Area Restrita</a> <br>
    <a href="login.php">Pagina de Login</a>


<br><br>
    <form action="login.php" method="post">
        <button class="btn btn-warning" type="submit" name="deslogar"> Deslogar</button>
    </form>


</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</html>
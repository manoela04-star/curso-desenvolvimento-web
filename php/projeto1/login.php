<?php
session_start();

$deslogar = $_POST["deslogar"];
var_dump($deslogar);
if(isset($deslogar)){
    unset($_SESSION["auth"]);
}

if(isset($_SESSION["auth"])){
    header("location: area_restrita.php");
    exit();
}

$email =  $_REQUEST["email"];
var_dump($email);

$senha = $_REQUEST["senha"];
var_dump($senha);

$email_login = "alan@gmail.com";

$senha_login = "123456";

if($email == $email_login && $senha == $senha_login){
    $_SESSION['auth'] = true;
    header("Location: area_restrita.php");
    exit();
} else if( $email != null && $senha != null ){
    $erro = "E-mail ou senha incorretos";
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Login</title>
</head>


<body>

<h1 class="text-center p-3"> Pagina de login</h1>

<form class="container" action="" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
    </div>
    <button type="submit" class="btn btn-outline-success">Entrar</button>


<?php if(isset($erro)){ ?>
    <div class="alert alert-danger d-flex align-items-center p-1 mt-3" role="alert">
        <div>
            <?php echo $erro; ?>
        </div>
    </div>
<?php } ?>


</form>

<br>
<a href="index.php">Pagina Inicial</a> <br>
<a href="area_restrita.php">Area Restrita</a> <br>
<a href="login.php">Pagina de Login</a>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link rel="shortcut icon" href="../img/leao.png" type="image/x-icon">
    <title>Casdastrar</title>
</head>

<body>
<?php
    include('../controller/newSession.php');
?>
    <div class="main-login">
        <div class="left-login">
            <div class="box">
                <h1>Bem vindo</h1>
                <img src="../img/cadastrar.svg" alt="">
            </div>
        </div>

        <div class="right-login">
            <form method="post" class="card-login">
                <img src="../img/leao.png" alt="marca leao" class="logo-leao">
                <h1>Cadastro</h1>
                <div class="textfield">
                    <label for="usuario">Email</label>
                    <input type="email" name="email" placeholder="Seu melhor email" aria-describedby="emailHelp" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" aria-describedby="passwordHelp" required>
                </div>
                <button class="Btn-Login" name="submit">Cadastrar</button>
                <a href=""> Login up </a>
            </form>
        </div>

    </div>

</body>

</html>
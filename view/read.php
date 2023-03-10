<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/leao.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/read.css">
    <title>Tabela-Livraria</title>
</head>
<?php
    require('../model/livro.php');
    $data = read();

    if(!empty($_GET['id'])){
        echo delete($_GET['id']);
    }
?>
<body>
    <header>
        <div class="div-img">
            <img src="../img/leao.png" alt="marca leao">
        </div>
        <h3>Livraria Santa Cruz </h3>
        <div class="box-home-create">
            <a href="../view//update.php">Home</a>
            <a href="../view/create.php">Create</a>
        </div>
    </header>

    <section>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Paginas</th>
                <th scope="col">Autor</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
                

            <tbody>
                <?php foreach($data as $row){ ?>
                <tr>
                    <td>
                        <!--Id-->
                        <?php echo $row['id']; ?>
                    </td>
                    <td>    
                        <!--Nome-->
                        <?php echo $row['nome']; ?>
                    </td>
    
                    <td>
                        <!--Preço-->
                        <?php echo $row['preco']." R$"; ?>
                    </td>
                    <td>
                        <!--Pagina-->
                        <?php echo $row['pagina']; ?>
                    </td>
                    <td>
                        <?php echo $row['autor']; ?>
                        <!--Autor-->
                    </td>
                    <td>
                        <?php echo $row['quantidade']; ?>
                        <!--Quantidade-->
                    </td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>">✏️</a>
                        <a href="read.php?id=<?php echo $row['id']; ?>">🗑️</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>

        </table>
    </section>

</body>
</html>
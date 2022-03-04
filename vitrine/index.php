<?php
require "config.php"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitrine</title>
    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="stylesheet" href="estilo.css">
</head>
<header>
    <a href="index.php" title="Home">
        <img src="imagens/logo.png" alt="Adidas">
    </a>
    <nav>
        <ul>
            <li>
                <a href="index.php"> Home </a>
            </li>
            <?php
            $sql = "select 
                            * 
                        from 
                            categoria 
                        order by 
                            nome";

            $consulta = $pdo->prepare($sql);
            echo $consulta->execute();

            while ($dados = $consulta->fetch(PDO::FETCH_OBJ)) {
                $id = $dados->id;
                $nome = $dados->nome;
            ?>
                <li>
                    <a href="categoria/<?= $id ?>"> <?= $nome ?></a>
                </li>
            <?php

                echo $nome;
            }



            ?>
            <li>
                <a href="contato"> Contato </a>
            </li>
        </ul>
    </nav>
</header>

<body>


</body>

</html>
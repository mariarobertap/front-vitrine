<div class="banner">
    <?php
    $sql = "select * from banner order by rand() limit 1";
    //preparar o sql para execução
    $consulta = $pdo->prepare($sql);
    //executar
    $consulta->execute();
    $dados = $consulta->fetch(PDO::FETCH_OBJ);
    $banner = $dados->banner;


    ?>
    <img src="imagens/<?= $banner ?>" alt="Banner">
</div>
<main>
    <h1>Produtos em Destaque</h1>
    <div class="grid">
        <?php
        //selecionar os produtos da vitrine
        $sql = "select * from produto
        order by rand() limit 6";
        //preparar o sql para executar
        $consulta = $pdo->prepare($sql);
        //executo o sql
        $consulta->execute();

        //separar os dados
        while ($dados = $consulta->fetch(PDO::FETCH_OBJ)) {
            $id = $dados->id;
            $nome = $dados->nome;
            $valor = $dados->valor;
            $imagem1 = $dados->imagem1;

            $valor = number_format($valor, 2, ",", ".");
        ?>
            <div class="coluna center">
                <img src="produtos/<?= $imagem1 ?>">
                <h2><?= $nome ?></h2>
                <p class="valor">
                    R$ <?= $valor ?>
                </p>
            </div>
        <?php
        } //fim do while
        ?>
    </div>
</main>
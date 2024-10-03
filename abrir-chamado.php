<?php
require_once('includes/validador-acesso.php');
require_once('components/head.php');
?>

<body>
    <script src="assets/js/showAlert.js"></script>
    <script src="assets/js/limparParametros.js"></script>
    <script defer src="assets/js/validarDados.js"></script>

    <?php
    include('components/header.php');
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
    ?>
        <script>
            showAlert('success', 'Chamado aberto com sucesso!');
            clearUrlParameters();
        </script>
    <?php } ?>

    <main class="main">
        <img class="img" src="assets/img/online-suport-il.png" alt="ilustração suporte online">

        <div class="card-abrir-chamado ">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    Abertura de chamado
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <form id="form" action="includes/registrar-chamado.php" method="POST">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" name="title" class="form-control input" placeholder="Título">
                                </div>

                                <div class="form-group mt-2">
                                    <label>Categoria</label>
                                    <select class="form-control input" name="category">
                                        <option value="">Selecione uma categoria</option>
                                        <option value="Criação Usuário">Criação Usuário</option>
                                        <option value="Impressora">Impressora</option>
                                        <option value="Hardware">Hardware</option>
                                        <option value="Software">Software</option>
                                        <option value="Rede">Rede</option>
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <label>Descrição</label>
                                    <textarea class="form-control input" rows="3" name="description"></textarea>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-6">
                                        <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
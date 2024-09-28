<?php
require_once('includes/validador-acesso.php');
require_once('includes/head.php');
?>

<body>
    <?php
    include('includes/header.php');
    ?>
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

                            <form>
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" placeholder="Título">
                                </div>

                                <div class="form-group mt-2">
                                    <label>Categoria</label>
                                    <select class="form-control">
                                        <option>Criação Usuário</option>
                                        <option>Impressora</option>
                                        <option>Hardware</option>
                                        <option>Software</option>
                                        <option>Rede</option>
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <label>Descrição</label>
                                    <textarea class="form-control" rows="3"></textarea>
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
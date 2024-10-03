<?php
require_once('includes/validador-acesso.php');
require_once('components/head.php');
?>

<body>
    <?php
    include('components/header.php');

    // Abre o arquivo e lê o conteúdo
    $arquivo = fopen('../help-desk-app-x/arquivo.txt', 'r');
    $chamados = [];

    while (!feof($arquivo)) {
        $registro = fgets($arquivo);
        $registroDetalhes = explode('#', $registro);


        if ($_SESSION['perfil-id'] == 2) {
            if ($_SESSION['id'] != $registroDetalhes[0]) {
                continue; //não faz nada

            } else {
                $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
            }
        } else {
            $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados

        }
    }
    fclose($arquivo);
    ?>

    <main class="main">
        <img class="img align-self-start" src="assets/img/online-suport-il.png" alt="ilustração suporte online">

        <div class="container-cards">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    Consulta de chamado
                </div>
                <div class="card-body d-flex gap-3 flex-wrap">

                    <?php
                    foreach ($chamados as $chamado) {
                        // Divide o registro do chamado pelos delimitadores
                        $chamado_dados = explode('#', $chamado);

                        if (count($chamado_dados) < 3) {
                            continue;
                        }
                    ?>
                        <div class="card mb-3 p-2 bg-dark text-light card-child">
                            <div class="card-body">
                                <h5 class="card-title"><?= $chamado_dados[1]; ?></h5>
                                <h6 class="card-subtitle mb-2 text-secondary"><?= $chamado_dados[2]; ?></h6>
                                <p class="card-text"><?= $chamado_dados[3]; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<?php
session_start();

if (isset($_SESSION['usuario-autenticado']) && $_SESSION['usuario-autenticado'] == 'SIM') {
    header('Location: home.php');
    exit();
}
require_once('components/head.php');
?>

<body>
    <?php
    include_once('components/header.php');
    ?>
    <main class="main">
        <img class="img" src="assets/img/online-suport-il.png" alt="ilustração suporte online">
        <div class="card-login">
            <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="includes/valida-login.php" method="POST">
                        <div class="form-group bg-dark mb-2">
                            <input id="email" name='email' type="email" class="form-control " placeholder="your-email@example.com">
                        </div>
                        <div class="form-group mb-2">
                            <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>
                        <? if (isset($_GET['login'])) {

                            if ($_GET['login'] == 'error') {
                                $text = 'Usuário ou senha inválidos(s)';
                            }
                            if ($_GET['login'] == 'error2') {
                                $text = 'Necessário fazer Login';
                            } ?>

                            <div class="text-danger">
                                <?php echo $text ?>
                            </div>
                        <? } ?>
                        <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/validaEntrada.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
require_once('includes/validador-acesso.php');
require_once('components/head.php');
?>

<body>
    <?php
    include('components/header.php');
    ?>
    <main class="main">
        <img class="img" src="assets/img/online-suport-il.png" alt="ilustração suporte online">
        <div class="card-login">
            <div class="card-home ">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center button">
                                <a href="abrir-chamado.php"><img src="assets/img/create-order.png" width="70" height="70"></a>
                            </div>
                            <div class="col-6 d-flex justify-content-center button">
                                <a href="consultar-chamado.php"><img src="assets/img/search-property.png" width="70" height="70"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
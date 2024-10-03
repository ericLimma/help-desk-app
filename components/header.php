<header>
    <nav class="nav navbar navbar-dark bg-dark d-flex navbar-expand-lg">
        <a class="navbar-brand" href="home.php">
            <img src="assets/img/online-suport.png" width="60" height="60" alt="help desk logo">
            App Help Desk
        </a>
        <?php
        if (isset($_SESSION['usuario'])) { ?>
            <div class="justify-self-end">
                <div class="dropdown">
                    <button id="logout-button" class="btn btn-danger dropdown-toggle" type="button">
                        Olá <?= htmlspecialchars($_SESSION['usuario']); ?>
                    </button>
                </div>
            </div>
        <?php } ?>
    </nav>
    <script src="assets/js/logout.js"></script>
</header>
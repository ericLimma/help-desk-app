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
                    <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu do usuário">
                        Olá <?php echo htmlspecialchars($_SESSION['usuario']); ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a id="logout-button" class="dropdown-item" href="logout.php">Fazer Logout</a></li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </nav>
</header>
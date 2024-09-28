<?php
session_start();

if (!isset($_SESSION['usuario-autenticado']) || $_SESSION['usuario-autenticado'] != 'SIM') {
        header('Location: index.php?login=error2');
        exit();
}

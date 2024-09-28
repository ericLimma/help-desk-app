<?php
session_start();

$usuarios_app = [
        ['email' => 'ericlimma378@gmail.com', 'senha' => '1221', 'nome' => 'Erick'],
        ['email' => 'adm@test.com', 'senha' => '1221', 'nome' => 'Administrador'],
        ['email' => 'user@test.com', 'senha' => 'user123', 'nome' => 'Usuário'],
        ['email' => 'tester@test.com', 'senha' => 'tester123', 'nome' => 'Testador'],
];


foreach ($usuarios_app as $idx => $user) {

        if ($user['email'] == $_POST['email']) {

                if ($user['senha'] == $_POST['senha']) {
                        $validado = true;
                        break;
                }
        }
        $validado = false;
}

if ($validado) {
        $_SESSION['usuario'] = $user['nome'];
        $_SESSION['usuario-autenticado'] = 'SIM';
        header('Location: ../../home.php');

        exit();
} else {
        $_SESSION['usuario-autenticado'] = 'NÃO';
        unset($_SESSION['usuario']);
        header('Location: ../../index.php?login=error');
        exit();
}

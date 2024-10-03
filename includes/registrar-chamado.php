<?php
session_start();
$titulo = tratarDado($_POST['title']);
$categoria = $_POST['category'];
$descricao = tratarDado($_POST['description']);
$id = $_SESSION['id'];

$arquivo = fopen('../../help-desk-app-x/arquivo.txt', 'a'); //abre o arquivo apenas para escrita
$texto = $id . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

echo $texto;

fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: ../abrir-chamado.php?success=true');

function tratarDado($texto)
{
        return ucfirst(trim(str_replace('#', '-', $texto)));
}

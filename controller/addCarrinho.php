<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if (isset($_SESSION['user'])) {
        $idProd = $_GET['id'];
        $_SESSION['idProduto'] = $_SESSION['idProduto'].' '.$idProd;
        header('Location: ../pages/carrinho.php');
    }
    else {
        header('Location: ../pages/login.php');
    }
}

?>
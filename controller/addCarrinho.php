<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $idProd = $_GET['id'];
    $_SESSION['idProduto'] = $idProd;
    header('Location: ../pages/carrinho.html');
}

?>
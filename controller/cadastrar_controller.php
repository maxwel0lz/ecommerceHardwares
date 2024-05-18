<?php
    function existUsers($cpf , $email){

    }
    function cadUser(){
        include '../data/connectionBD.php';
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $iNome = $_POST["iNome"];
            $iSobrenome = $_POST["iSobrenome"];
            $iCpf = $_POST["iCpf"];
            $iEmail = $_POST["iEmail"];
            $iSenha = $_POST["iSenha"];
            $iConfSenha = $_POST["iConfSenha"];
        }
        if ($iSenha == $iConfSenha) {
            $conn = conectBD();
            $sql = "INSERT INTO usuario ( nome_user, sobrenome_user, cpf_user, email_user, senha_user) VALUES ('$iNome', '$iSobrenome','$iCpf','$iEmail','$iSenha')";
    
            if (mysqli_query($conn, $sql)) {
                echo "Novo registro inserido com sucesso!";
            } else {
                echo "Erro ao inserir o registro: " . mysqli_error($conexao);
            }
        }
        $conn->close();
    }
    cadUser();
?>
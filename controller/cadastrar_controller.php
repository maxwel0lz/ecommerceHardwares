<?php
session_start();
include '../data/connectionBD.php';
$conn = conectBD();

 if($_SERVER["REQUEST_METHOD"]== "POST"){
    $iNome = $_POST["iNome"];
    $iSobrenome = $_POST["iSobrenome"];
    $iCpf = $_POST["iCpf"];
    $iEmail = $_POST["iEmail"];
    $iSenha = $_POST["iSenha"];
    $iConfSenha = $_POST["iConfSenha"];
    }

    function existUsers($conn ,$cpf , $email , ){
    $sql = "SELECT * FROM usuario ";
    //EXECUTANDO QUERY
    $result = $conn->query($sql);

    //ENQUANTO HOVER RESULTADO PROUCURE DADOS IGUAS OS INPUTS
    $reposta = true;
    while($row = $result->fetch_assoc()){
        if($row['email_user'] == $email){
            $reposta = false;
            $_SESSION['error_menssage'] = "email ja existe!";
            header("Location: ../pages/cadastrar.php");
            exit;
        }
        elseif($row['cpf_user'] == $cpf){
            $reposta = false;
            $_SESSION['error_menssage'] = "CPF ja existe!";
            header("Location: ../pages/cadastrar.php");
            exit; 
        }
    }
    if ($reposta) {
        cadUser();
    }
}
existUsers($conn ,$iCpf, $iEmail );
    function cadUser(){
        global $iConfSenha ,$iNome,$iSobrenome,$iCpf,$iEmail,$iSenha;
        
        if ($iSenha == $iConfSenha) {
            $conn = conectBD();
            $sql = "INSERT INTO usuario ( nome_user, sobrenome_user, cpf_user, email_user, senha_user) VALUES ('$iNome', '$iSobrenome','$iCpf','$iEmail','$iSenha')";
            
            if (mysqli_query($conn, $sql)) {
                header("location: ../index.html");
            } else {
                echo "Erro ao inserir o registro: " . mysqli_error($conn);
            }
        }
    }
    $conn->close();
    ?>
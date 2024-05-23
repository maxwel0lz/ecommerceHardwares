<?php
session_start();
function userExiste(){
    include '../data/connectionBD.php';
    $conn = conectBD();
    //PEGANDO INFORMAÇÕES DO INPUT ATRAVES DO METODO POST
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    }

    //PREPARANDO QUERY SQL
    $sql = "SELECT * FROM usuario ";
    //EXECUTANDO QUERY
    $result = $conn->query($sql);

    //ENQUANTO HOVER RESULTADO PROUCURE DADOS IGUAS OS INPUTS
    $respose = false;
    while($row = $result->fetch_assoc()){
        if($row['email_user'] == $email && $row['senha_user'] == $senha){
            $respose = true;
            $_SESSION['user'] = $row['nome_user'].' '. $row['sobrenome_user'];
            $_SESSION['id_Produto'] = [];
            header("Location: ../index.php");
            exit();
            break;
        }
        else{
            $respose = false;
        }
    }
    if($respose == false){
        header("Location: ../pages/login.php?msg= Email ou Senha incorreto! ");
        
    }
    $conn->close();
    return $respose;
}
userExiste();

?>
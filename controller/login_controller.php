<?php
function userExiste(){
    include '../data/connectionBD.php';

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
            header("Location: ../index.html");
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
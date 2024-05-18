<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/stLogin/styleLogin.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../global.css">
</head>
<body>

    <nav id="navbar" class="" >
        <div id="boxconta"  >
            <span><svg xmlns="http://www.w3.org/2000/svg" width="18"height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"> <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/></svg><strong>Minha conta</strong></span>
            <p>Faça <a class="link-underline link-underline-opacity-0" href="login.php">Login</a> ou <a class="link-underline link-underline-opacity-0" href="cadastrar.php">Cadastre-se</a></p>
        </div>        
    </nav>

    <section id="sessaoLogin">
        <div id="conteiner">
            <div id="boxleft">
               <img id="imgbemvindo" src="../assets/bemVindo.png" alt="">
            </div>
    
            <div id="boxright">
                <strong>Login</strong>
                
                <form id="formulario"  action="../controller/login_controller.php"  method="post">
                    <label for="user">E-mail</label>
                    <input id="user" class="inputs form-control " name='email' type="email" placeholder="Digite seu e-mail:" required >
                    <div  class=" valid-feedback" name='msgErro'>
                        
                    </div>
                    <label for="senha">Senha</label>
                    <input id="senha" class=" inputs  form-control form-control-sm " name='senha' type="password" placeholder="Digite sua senha:">
                    <div  class=" invalid-feedback" >
                        Senha deve conter min 8 caracteres!
                    </div>
                    <div class="text-danger">
                        <?php
                            echo isset($_GET['msg'])? $_GET['msg']: '';
                        ?>
                    </div>
                    <span id="boxbtn">
                        <a href="cadastrar.php" class="link-underline link-underline-opacity-0">Cadastrar-se</a>
                        <input id="btnentrar" name="btnentrar" class="btn" type="submit" value="Entrar" disabled>
                    </span>
                </form>
                
            </div>          
        </div>

    </section>
    
</body>
    <!-- SCRIPT BOOTSTRAP -->


<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
</script>
<script src="../scripts/validaçãoLogin.js"></script>

</html>
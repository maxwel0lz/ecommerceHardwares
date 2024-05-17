<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="shortcut icon" href="/assets/logo2-fiftyhards.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/stCadastrar/styleCadastrar.css">
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
            <p>Faça <a class="link-underline link-underline-opacity-0" href="login.html">Login</a> ou <a class="link-underline link-underline-opacity-0" href="cadastrar.html">Cadastre-se</a></p>
        </div>        
    </nav>

    <section id="sessaoCad">
        <div id="conteiner">
            <div id="boxleft">
               <img id="imgbemvindo" src="../assets/bemVindo.png" alt="">
            </div>
    
            <div id="boxright" class="gap-5">
                <strong>CADASTRAR-SE</strong>
                <form class="row g-3 " action="../controller/cadastrar_controller.php" method="post">
                    <div class="col-md-6 ">
                      <label for="validationServer01" class="form-label">Nome*</label>
                      <input type="text" class=" inpts form-control form-control-sm" name="iNome"  placeholder="Digite seu nome aqui:" id="iNome" required>
                      <div id="frase"  class="valid-feedback ">
                        Frase de validação
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="validationServer02" class="form-label">Sobrenome*</label>
                      <input type="text" class="inpts form-control form-control-sm" name="iSobrenome" placeholder="Digite seu sobrenome aqui:" id="iSobrenome"  required>
                      <div class="valid-feedback ">
                        Frase de validação
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="validationServer02" class="form-label">Cpf*</label>
                      <input type="text" class="inpts form-control form-control-sm" name="iCpf" placeholder="Digite seu cpf aqui:" id="iCpf"   required>
                      <div id="frase" class="valid-feedback ">Frase de validação</div>  
                      <div id="frase" class="invalid-feedback">Frase de validação</div>  
                    </div>
                    
                    <div class="col-md-6">
                      <label for="validationServer03" class="form-label">E-mail*</label>
                      <input type="email" class="inpts form-control form-control-sm" name="iEmail" placeholder="email@email.com" id="iEmail" aria-describedby="validationServer03Feedback" required>
                      <div id="validationServer03Feedback" class="invalid-feedback ">
                        Frase de validação
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <label for="validationServer05" class="form-label">Senha*</label>
                      <input type="password" class="inpts form-control form-control-sm" placeholder="Crie uma senha aqui:" name="iSenha" id="iSenha" aria-describedby="validationServer05Feedback" required>
                      <div id="validationServer05Feedback" class="invalid-feedback ">
                        Please provide a valid zip.
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label for="validationServer05" class="form-label">Confirmar Senha*</label>
                      <input type="password" class="inpts form-control form-control-sm " name="iConfSenha" placeholder="Confirme sua senha aqui:" id="iConfSenha" aria-describedby="validationServer05Feedback" required>
                      <div id="validationServer05Feedback" class="invalid-feedback ">
                        Please provide a valid zip.
                      </div>
                    </div>
                   
                    <div  class="col-12 d-flex justify-content-center  mt-4">
                      <button href="../index.html" id="btnCriar" class="btn" disabled  type="submit">Criar Conta</button>
                    </div>
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
<script src="../scripts/iteracao.js" ></script>

</html>
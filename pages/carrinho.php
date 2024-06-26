<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../styles/stCarrinho/stCarrinho.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    
</head>
<body>
  <?php
  session_start();

  if (!$_SESSION['user']) {
    header("Location: login.php");
  }
  ?>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg p-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="../"><img id="logo" src="../assets/logo2-fiftyhards.svg" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <form id="formSearch" class="d-flex  mb-2 mb-lg-0" role="search">
              <input class="form-control me-2 " id="pesquisar" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
            <ul id="navicon" class="navbar-nav ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sobre
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../pages/FaleConosco.php">Sobre</a></li>
                  <li><a class="dropdown-item" href="../pages/FaleConosco.php">Fale Conosco</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../pages/FaleConosco.php">Contatos</a></li>
                  <li><a class="dropdown-item" href="../pages/FaleConosco.php">Contatos</a></li>
                </ul>
              </li>
              <li class="nav-item">
              <?php
                if(isset($_SESSION['user'])){
                  $no = 'Maxwel';
                echo'<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"  width="25"height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>Login / Register</svg>'.$_SESSION['user'].'</a>
                  <ul class="dropdown-menu">
                    <li><buttom class="dropdown-item">sair</buttom></li>
                  </ul>
                  </li>';
              }
              else {
                echo '<a class="nav-link active" aria-current="page" href="login.php"><svg xmlns="http://www.w3.org/2000/svg"  width="25"height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/></svg>Login / Register</a>';
              }
              ?>
              </li>
              <li class="nav-item">
              <button id="btn-carrinho" onclick="window.location= 'carrinho.php'" type="button" class="btn btn-secondary position-relative px-3 ms-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16"><path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/></svg>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <span  id="contadorBola" class="visually"> 
                  <?php
                    if (isset($_SESSION['idProduto'])) {
                      $partes = explode(" ", $_SESSION['idProduto']);
                      $partes = array_map('intval', $partes); 
                      $qnt = count($partes);
                      echo $qnt -1;
                    }
                    else {
                      echo 0;
                    }
                  ?>
                  </span>
                </span>
              </button>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>

      <main class="p-5">
        <h1>Meu Carrinho</h1>
        <div id="conteiner">
          <div id="box-itens-car">
            <div id="box-2">
              <table id="tabela">
                <thead>
                  <tr class="linha-titulo-tab">
                    <th class="col_titulo-tab">Produto</th>
                    <th class="col_titulo-tab">Descriçao</th>
                    <th class="col_titulo-tab">Qtd</th>
                    <th class="col_titulo-tab">Preço</th>
                    <th class="col_titulo-tab"></th>
                  </tr>
                </thead>
                <tbody  id="listaCart" class="">
                  <?php
                    include '../model/ClassProduto.php';
                    include '../data/connectionBD.php';
                    $conn = conectBD();
                    $sql = 'SELECT * FROM produto ';
                    //EXECUTANDO QUERY
                    $result = $conn->query($sql);
                
                    //Função pega todos os produtos e coloca retorna em uma array
                    function crateProduto($result){
                      $arr = [];
                      while($row = $result->fetch_assoc()){
                        $id = $row['id_prod'];
                        $marca = $row['marca_prod'];
                        $titulo = $row['titulo_prod'];
                        $imagem = $row['imagem_prod'];
                        $descricao = $row['descricao_prod'];
                        $valor = $row['valor_prod'];
                        
                        $prod = new Produto($id,$marca,$titulo,$imagem,$descricao,$valor); 
                        array_push($arr , $prod);
                      } 
                    return $arr;
                  }
                  //Atraves dos indices vindo da sessasao coloca em uma array so os que vai ser postos no carrinho
                  $arrayCarrinho = [];
                  $total = 0;
                  if (isset($_SESSION['idProduto'])) {
                    $partes = explode(" ", $_SESSION['idProduto']);
                    $partes = array_map('intval', $partes);
                    $produtos = crateProduto($result);
                    foreach($partes as $exibir){
                      foreach($produtos as $produto){
                        if ($exibir ==  $produto->getIdProd()) {
                          $total += $produto->getValorProd();
                          array_push($arrayCarrinho, $produto);
                        }
                      }
                    }
                  }
                  //caso nao aja nenhum indice para ser posto no carrinho
                  else{
                    echo '<div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                      Não a itens no carrinho!
                    </div>
                  </div>';
                  }
                  //Mostra itens do carrinho apartir da arrayCarrinho
                  foreach($arrayCarrinho as $prod){
                    echo'
                      <tr class="linha-item-tab">
                        <td class="col_item-tab"><img src='.$prod->getImagemProd() .' width="100px" alt=""></td>
                        <td class="col_item-tab">'. $prod->getTituloProd().'</td>
                        <td class="col_item-tab">1</td>
                        <td class="col_item-tab">'.$prod->getValorProd().'</td>
                        <td id="lixeira" type="submit" class="col_item-tab"><svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/></svg></td>
                      </tr>
                  ';
                  }
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- <td><form action="./carrinho.php"  method="post"><button id="lixeira" type="submit" class="col_item-tab"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/></svg></button></form></td> -->
          <div id="boxpedido">
            <div id="box-1">
              <h2>Rerumo</h2>
              <span id="sub">Subtotal:
                <strong>
                  <?php echo $total; ?>
                  
                </strong>
              </span>
              <span id="total">Total:
                <strong>R$<?php echo $total ?></strong>
              </span>
              <div id="info-avista">
                <p>á vista</p>
                <strong>R$<?php echo $total ?></strong>
                <h6>no PIX com 15% desconto</p>
              </div>
              <div id="info-cred">
                <p>á vista</p>
                <strong>R$<?php echo $total ?></strong>
                <h6>Até 12x no de <span>R$<?php echo round($total/12 , 2) ?></span><br>sem juros no cartão</p>
              </div>

              <div id="box-btn-comprar">
                <button id="btn-comprar">COMPRAR
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>


      <!-- FOOTER -->
      <footer id="footer" class="">
        <div id="boxfooter" class="d-flex justify-content-between ">
          
          <div class="">
            <p class="pfooter" >INSTITUCIONAL</p>
            <ul class="p-0">
              <a class="link-light link-underline link-underline-opacity-0" href="FaleConosco.php"><li>Quem somos</li></a>
              <a class="link-light link-underline link-underline-opacity-0" href="FaleConosco.php"><li>Localizaçao</li></a>
              <a class="link-light link-underline link-underline-opacity-0" href="FaleConosco.php"><li>Autor</li></a>
            </ul>
          </div>
  
          <div class="">
            <p class="pfooter">Ajuda</p>
            <ul class="p-0">
              <a class="link-light link-underline link-underline-opacity-0"  href="FaleConosco.php"><li>Sac</li></a>
              <a class="link-light link-underline link-underline-opacity-0"  href="FaleConosco.php"><li>Fale Conosco</li></a>
            </ul>
          </div>
        
          <div id="social" class="">
            <p class="pfooter">Social</p>
            <p style="color: var(--branco);">Receba ofertas especias pelo e-mail:</p>
            <form action="/">
              <input type="email" placeholder="E-mail">
              <button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope-arrow-up" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99zm1 7.105 4.708-2.897L1 5.383zM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/><path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.354 1.25 1.25a.5.5 0 0 1-.708.708L13 12.207V14a.5.5 0 0 1-1 0v-1.717l-.28.305a.5.5 0 0 1-.737-.676l1.149-1.25a.5.5 0 0 1 .722-.016"/></svg></button>
            </form>
            <span id="boxredes" class="mt-3">  
              <a class="link-light link-underline link-underline-opacity-0" href="#"><div>
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>
              </div></a>
              <a class="link-light link-underline link-underline-opacity-0" href="#"><div>
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                </svg>
              </div></a>
              <a class="link-light link-underline link-underline-opacity-0" href="#"><div>
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                </svg>
              </div></a>
              <a class="link-light link-underline link-underline-opacity-0"  href="#"><div>
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
              </div></a>
            </span>
          </div>
  
        </div>
      </footer>
    
</body>


<script src="../scripts/carrinho.js"></script> 
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
</script>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../styles/stNav.css">
    <link rel="stylesheet" href="../styles/stDetalhes/detMean.CSS">
    <link rel="stylesheet" href="../styles/footer.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <title>Detalhes</title>
</head>

<body>
  <?php
    session_start();
    $id = $_GET['id'];
    $url = '../controller/addCarrinho.php?id=php $id?>'
  ?>

    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg p-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img id="logo" src="../assets/logo2-fiftyhards.svg" alt=""></a>
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
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pages/login.html"><svg xmlns="http://www.w3.org/2000/svg" width="18"height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"> <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/></svg> Login/Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/></svg> Carrinho</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    
    <section id="conteiner" class="container-fluid row">
      <div id="boximagem" class="col-md-6">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img id="img1" src="https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/t/g/tgt-jsr-bkgf0110012.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img id="img2" src="https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/t/g/tgt-ern-rgb012312.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img id="img3" src="../assets/motagemHadware.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span id="btnprevi" class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span id="btnnext" class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div id="boxtitulo" class="col-md-6">
        <div id="titulo">
          <strong id="idtitulo">GABINETE GAMER TGT JESTER, MID-TOWER, LATERAL DE VIDRO, COM 2 FANS, PRETO, TGT-JSR-BKGF01</strong>
          <span class="d-flex justify-content-between px-">
            <span class="d-flex">
              <p>marca:</p>
              <p id="idmarca">GTYA</p>
            </span>
            <p>estrelas</p>
          </span>
        </div>
        <div id="status" class="">
          <h6>Produto Disponivel</h6>
        </div>
        
        <div id="boxpreco">
          <span id="preco">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
              <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
              <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
              <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
            </svg></span>
            <div id="info">
              <p>á vista</p>
              <strong>R$150,89</strong>
              <h6>no PIX com 15% desconto</p>
            </div>
          </span>
          <div id="boxbtn">
            <form id="formBtn" method="post">
              <button type="submit" id="btn-addCart" name="btnAddCart">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>
                <div id="infobtn">
                  <h5>COMPRAR</h5>
                  <p>Colocar no carrinho</p>
                </div> 
              </button>
          </form>

          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="boxpagamento">
            <span id="formaPagamento">
              <h4>Formas de pagamento</h4>
              <div id="boxbancos">
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/visa.svg" alt="">
                </span>
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/mastercard.svg" alt="">
                </span>
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/elo.svg" alt="">
                </span>
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/amex.svg" alt="">
                </span>
              </div>
            </span>
          </div>
          <div class="boxpagamento">
            <span id="formaPagamento">
              <h4>Redes Socias</h4>
              <div id="boxredes">
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/visa.svg" alt="">
                </span>
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/mastercard.svg" alt="">
                </span>
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/elo.svg" alt="">
                </span>
                <span class="imgbanco">
                  <img src="https://raw.githubusercontent.com/wallynm/payment-icon-svg/a3a785f4c07e11524b91c858dc52b342fae08bbd/icons/amex.svg" alt="">
                </span>
              </div>
            </span>
          </div>
        </div>
        
      </div>
      </section>

      <section id="sessao-descricao">
        <h2 id="tituloH2">Descrição do Produto:</h2>
        <div id="boxdescricao">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe vero veritatis? Accusantium dolore perferendis voluptate in non cumque at, repellendus fugiat aperiam ipsa, magnam, quod hic. Alias, numquam? Nobis!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vel, esse vero nulla consectetur quam sit et non, a dicta, voluptatibus quasi minima consequuntur quas tempora dolor. Numquam, repellendus est.</p>
          <h5>outra sessao</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ipsum dolore maiores in quas odio dolorum corporis quis. Sunt nam eligendi doloribus qui odio nihil rem perferendis accusantium aut necessitatibus!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ipsum dolore maiores in quas odio dolorum corporis quis. Sunt nam eligendi doloribus qui odio nihil rem perferendis accusantium aut necessitatibus!</p>
        </div>

      </section>
      
      <footer id="footer">
        <div id="boxfooter" class="d-flex justify-content-between ">
          
          <div class="">
            <p class="pfooter" >INSTITUCIONAL</p>
            <ul class="p-0">
              <a class="link-light link-underline link-underline-opacity-0" href="pages/FaleConosco.html"><li>Quem somos</li></a>
              <a class="link-light link-underline link-underline-opacity-0" href="pages/FaleConosco.html"><li>Localizaçao</li></a>
              <a class="link-light link-underline link-underline-opacity-0" href="pages/FaleConosco.html"><li>Autor</li></a>
            </ul>
          </div>
  
          <div class="">
            <p class="pfooter">Ajuda</p>
            <ul class="p-0">
              <a class="link-light link-underline link-underline-opacity-0"  href="pages/FaleConosco.html"><li>Sac</li></a>
              <a class="link-light link-underline link-underline-opacity-0"  href="pages/FaleConosco.html"><li>Fale Conosco</li></a>
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
    
    
    <script src="../scripts/detalhes.js"></script>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
></script>
</html>
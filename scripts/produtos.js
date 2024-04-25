const listaProdutos = [
    {
        id: 1,
        marca: "HYPERX",
        titulo: "HEADSET GAMER HYPERX CLOUD III, SOM SURROUND 7.1 ",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/7/2/727a8aa2.jpg",
        valor: 265.99
    },
    {
        id: 2,
        marca: "DUEX",
        titulo: "MONITOR GAMER DUEX DX270QGP165, 27 POL.1MS 165HZ",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/d/x/dx270qgp165024526.jpg",
        valor: 1687.89
    },
    {
        id: 3,
        marca: "SMART",
        titulo: "FONTE THERMALTAKE SMART 700W 80PLUS WHITE, SPD-0700P",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/s/p/spd-0700p3.jpg",
        valor: 299.99
    },
    {
        id: 4,
        marca: "PCYES",
        titulo: "MOUSE GAMER PCYES GAIUS, RGB, 12400DPI, 7 BOTOES",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/p/m/pmggbv4.jpg",
        valor: 99.89
    }
]
const btnCarrinho = document.querySelector('#btn-carrinho')
btnCarrinho.addEventListener('click', function(){
    window.location.href = './pages/carrinho.html'
})

function criarViewProduto(id,titulo,desc,imagem) {
    const boxprodutos = document.querySelector('#boxprodutos')
    
    const boxCentral = document.createElement('div')
    boxprodutos.appendChild(boxCentral)
    
    const tagA = document.createElement('a')
    tagA.classList = "link-underline link-underline-opacity-0"
    tagA.href = `pages/detalhes.html?id=${id}`
    boxCentral.appendChild(tagA)
    
    const div = document.createElement('div')
    div.classList = 'card col-4 item'
    div.style.width = '18rem'
    tagA.appendChild(div)

    const tagImg = document.createElement('img')
    tagImg.src = imagem
    tagImg.id = 'imag'
    tagImg.classList = 'card-img-top'
    tagImg.alt = 'Imagem do produto'
    div.appendChild(tagImg)

    const div2 = document.createElement('div')
    div2.classList = 'card-body'
    div2.id = 'tituloH5'
    div.appendChild(div2)


    const tagTitulo = document.createElement('h5')
    tagTitulo.classList = 'card-title'
    tagTitulo.innerHTML = titulo
    div2.appendChild(tagTitulo)

    const descricao = document.createElement('p')
    descricao.classList = 'card-text'
    descricao.innerHTML = desc
    div2.appendChild(descricao)

    const boxpreco = document.createElement('span')
    boxpreco.id = "boxpreco"
    div2.appendChild(boxpreco)

    const divpreco = document.createElement('div')
    boxpreco.appendChild(divpreco)

    const preco = document.createElement('strong')
    preco.id = "preco"
    preco.innerHTML = 'R$3000,00'
    divpreco.appendChild(preco)

    const pix = document.createElement('p')
    pix.innerHTML = 'No<strong>Pix</strong>'
    divpreco.appendChild(pix)

    const btnComprar = document.createElement('a')
    btnComprar.id = "bntcomprar"
    btnComprar.href = '#'
    btnComprar.classList = 'link-underline link-underline-opacity-0'
    btnComprar.innerHTML = 'Comprar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/></svg>'
    div2.appendChild(btnComprar)
}

for(let produto of listaProdutos){
    let id = produto.id
    let titulo = produto.titulo
    let descricao = produto.descricao
    let imagem = produto.imagem
    criarViewProduto(id,titulo,descricao,imagem)
 }
const box = document.querySelector('#boxprodutos')
box.addEventListener('click', function(event){
    console.log(event.target);
})

const btnComprar = document.querySelector('#bntcomprar')
btnComprar.addEventListener('click', function(event){
    const iconCart = document.querySelector('#contadorBola')
    
})



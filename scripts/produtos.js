import lista from "./listaPRodutos.js";
const listaProdutos = lista()
 
console.log(listaProdutos);

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
    div.style.width = '16rem'
    tagA.appendChild(div)

    const tagImg = document.createElement('img')
    tagImg.src = imagem
    tagImg.classList = 'card-img-top'
    tagImg.alt = 'Imagem do produto'
    div.appendChild(tagImg)

    const div2 = document.createElement('div')
    div2.classList = 'card-body'
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
    console.log(produto);
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



const prodNoCarrinho = [
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
    } 
]

function addItemNoCarrinho(titulo, imagem, valor) {
    const lista = document.querySelector('#listaCart')
    const tagTR = document.createElement('tr')
    tagTR.classList = " linha-item-tab"
    tagTR.innerHTML = `<td class="col_item-tab"><img src="${imagem}" width="100px" alt=""></td>
    <td class="col_item-tab">${titulo}</td>
    <td class="col_item-tab">1</td>
    <td class="col_item-tab">R$${valor}</td>
    <td id="lixeira" class="col_item-tab"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/></svg></td>`
    lista.appendChild(tagTR)
   
}
for(let item of prodNoCarrinho){
    const {titulo , imagem, valor} = item
    addItemNoCarrinho(titulo ,imagem , valor)
}

var btnLixeira = document.querySelectorAll('#lixeira')
for(const lixeira of btnLixeira){
    lixeira.addEventListener('click', function(event){
        console.log('log');
       const tagPai =  event.target.parentElement
       tagPai.remove()
    })
}
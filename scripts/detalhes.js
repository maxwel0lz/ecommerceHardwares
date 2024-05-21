// Obtém a query string da URL
const queryString = window.location.search;
// Cria um objeto URLSearchParams a partir da query string
const params = new URLSearchParams(queryString);
// Obtém o valor da variável "id" da URL
let idSelecionado = params.get('id');
const form = document.querySelector('#formBtn')
console.log(form);
form.setAttribute('action', `../controller/addCarrinho.php?id=${idSelecionado}`)
const listaProdutos = [            
    {
        id: 1,
        marca: "HYPERX",
        titulo: "HEADSET GAMER HYPERX CLOUD III, SOM SURROUND 7.1, ",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/7/2/727a8aa2.jpg"
    },
    {
        id: 2,
        marca: "DUEX",
        titulo: "MONITOR GAMER DUEX DX270QGP165, 27 POL.1MS 165HZ",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/d/x/dx270qgp165024526.jpg"
    },
    {
        id: 3,
        marca: "SMART",
        titulo: "FONTE THERMALTAKE SMART 700W 80PLUS WHITE, SPD-0700P",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/s/p/spd-0700p3.jpg"
    },
    {
        id: 4,
        marca: "PCYES",
        titulo: "MOUSE GAMER PCYES GAIUS, RGB, 12400DPI, 7 BOTOES",
        imagem: "https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/p/m/pmggbv4.jpg"
    }
]


const marca = document.querySelector('#idmarca')
const titulo = document.querySelector('#idtitulo')
const imagem1 = document.querySelector('#img1')
const imagem2 = document.querySelector('#img2')
const imagem3 = document.querySelector('#img3')
for(let produto of listaProdutos){
    if(produto.id == idSelecionado){
        titulo.innerHTML = produto.titulo
        marca.innerHTML = produto.marca
        imagem1.src = produto.imagem
        imagem2.src = produto.imagem
        imagem3.src = produto.imagem
    }
}





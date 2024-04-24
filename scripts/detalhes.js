import lista from './listaPRodutos.js'
// Obtém a query string da URL
const queryString = window.location.search;
// Cria um objeto URLSearchParams a partir da query string
const params = new URLSearchParams(queryString);
// Obtém o valor da variável "id" da URL
let idSelecionado = params.get('id');



const marca = document.querySelector('#idmarca')
const titulo = document.querySelector('#idtitulo')
for(let produto of lista()){
    if(produto.id == idSelecionado){
        titulo.innerHTML = produto.titulo
        marca.innerHTML = produto.marca
    }
}





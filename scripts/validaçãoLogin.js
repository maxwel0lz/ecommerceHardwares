const btnentrar = document.querySelector('#btnentrar')
const senha = document.querySelector("#senha") 

function verificaSenha(idTag) {
    const item = document.querySelector(`${idTag}`)
    if(item.value.length < 8){
        item.classList.remove('is-valid')
        item.classList.add("is-invalid")
    }                                                   //FUNÇÃO PARA VERIFICAR SENHA SE < 8 = FALSE
    else if(!item.classList.contains('is-valid')){
        item.classList.remove('is-invalid')
        item.classList.add("is-valid")  
    }
}

function ativarBotao() {
    if (senha.classList.contains('is-valid')) {
        btnentrar.disabled = false
    }
    if (senha.classList.contains('is-invalid')) {
        btnentrar.disabled = true
    }
    if(senha.disabled == true){
        console.log('style');
        btnentrar.style = "#bntentar:hover{nome}"
    }
                                                       //FUNÇÃO PARA ATIVAR BOTAO CASO TODOS OS INPUTS ESTIVEREM VALIDOS
}

document.querySelector('#senha').addEventListener('input', function(){
    verificaSenha('#senha')
})
senha.addEventListener('input', function(){
    ativarBotao()
    console.log("bnt");
})
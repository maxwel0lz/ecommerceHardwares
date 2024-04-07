const nome = document.querySelector("#iNome")
const sobrenome = document.querySelector("#iSobrenome")
const cpf = document.querySelector("#iCpf")
const senha = document.querySelector("#iSenha")
const confsenha = document.querySelector("#iConfSenha")
const btnCriar = document.querySelector("#btnCriar")
    

function verificaBasico(idTag){
    const item = document.querySelector(`${idTag}`)
    if(item.value == ''){
        item.classList.remove('is-valid')
        item.classList.add("is-invalid")
    }                                                      //FUNÇÃO PARA VERIFICAR SE O INPUTE TA VEZIO
    else if(!item.classList.contains('is-valid')){
        item.classList.remove('is-invalid')
        item.classList.add("is-valid")   
    }
}
document.querySelector('#iCpf').addEventListener("input", function() {
    const item = document.querySelector('#iCpf')
    console.log(item.value.length);
    if(item.value == '' || item.value.length > 11){
        item.classList.remove('is-valid')
        item.classList.add("is-invalid")
    }
    else if(!item.classList.contains('is-valid')){
        item.classList.remove('is-invalid')
        item.classList.add("is-valid")   
    }
    ativarBotao()
})
document.querySelector('#iCpf').addEventListener("keydown", function(event) {
    // Obter o código da tecla pressionada
    let key = event.keyCode;
    // Desativar letras (códigos ASCII 65-90 e 97-122)
    if ((key >= 60 || key <= 90) || (key >= 106 && key <= 200)) {
        event.preventDefault();
    }
    //ativarBotao()
})
document.querySelector("#iNome").addEventListener('input', function(){
    verificaBasico("#iNome")
    ativarBotao()
    
})
document.querySelector("#iSobrenome").addEventListener('input', function(){
    verificaBasico("#iSobrenome")
    ativarBotao()
})

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

document.querySelector("#iSenha").addEventListener('input',function(){  
    verificaSenha('#iSenha')
    ativarBotao()
})

document.querySelector("#iConfSenha").addEventListener('input', function(){
    verificaSenha('#iConfSenha')
    ativarBotao()
})

function ativarBotao() {
    console.log('ativo');
    if (nome.classList.contains('is-valid') && sobrenome.classList.contains('is-valid') && cpf.classList.contains('is-valid') && senha.classList.contains('is-valid') && confsenha.classList.contains('is-valid')) {
        btnCriar.disabled = false
    }
    if (nome.classList.contains('is-invalid') || sobrenome.classList.contains('is-invalid') || cpf.classList.contains('is-invalid') || senha.classList.contains('is-invalid') || confsenha.classList.contains('is-invalid')) {
        btnCriar.disabled = true
    }
}
/*document.querySelector('#btnCriar').addEventListener('input', function(){
    ativarBotao()
})*/

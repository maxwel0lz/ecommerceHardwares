function validarCadastro() {
    const nome = document.querySelector("#iNome").value
    const sobrenome = document.querySelector("#iSobrenome").value
    const cpf = document.querySelector("#iCpf").value
    const senha = document.querySelector("#iSenha").value
    const confsenha = document.querySelector("#iConfSenha").value
    
}
function verificaBasico(idTag){
    const item = document.querySelector(`${idTag}`)
    if(item.value == ''){
        item.classList.remove('is-valid')
        item.classList.add("is-invalid")
    }
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
})
document.querySelector('#iCpf').addEventListener("keydown", function(event) {
    // Obter o código da tecla pressionada
    let key = event.keyCode;
    // Desativar letras (códigos ASCII 65-90 e 97-122)
    if ((key >= 60 && key <= 90) || (key >= 106 && key <= 200)) {
        event.preventDefault();
    }
})
document.querySelector("#iNome").addEventListener('input', function(){
    verificaBasico("#iNome")
})
document.querySelector("#iSobrenome").addEventListener('input', function(){
    verificaBasico("#iSobrenome")
})

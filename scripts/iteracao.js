function validarCadastro() {
    const nome = document.querySelector("#iNome").value
    const sobrenome = document.querySelector("#iSobrenome").value
    const cpf = document.querySelector("#iCpf").value
    const senha = document.querySelector("#iSenha").value
    const confsenha = document.querySelector("#iConfSenha").value
    
}

document.querySelector("#iNome").addEventListener('blur', function() {
    const nome = document.querySelector("#iNome")
    nome.classList += "is-valid"
})
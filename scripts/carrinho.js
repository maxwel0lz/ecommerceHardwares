
var btnLixeira = document.querySelectorAll('#lixeira')
for(const lixeira of btnLixeira){
    lixeira.addEventListener('click', function(event){
        console.log('log');
       const tagPai =  event.target.parentElement
       tagPai.remove()
    })
}
console.log(btnLixeira);
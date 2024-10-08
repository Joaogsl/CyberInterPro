// Example starter JavaScript for disabling form submissions if there are invalid fields
//Validação de dados
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

//tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

//Mostrar e Ocultar Senha

function MostrarOcultarSenha(){
    var senha = document.querySelector('#senha');

    if(senha.type=="password"){
        senha.type = "text";
    }else{
        senha.type = "password";
    }
} 
function MostrarOcultarConfSenha(){
    var confsenha = document.querySelector('#confsenha');

    if(confsenha.type=="password"){
        confsenha.type = "text";
    }else{
        confsenha.type = "password";
}
}
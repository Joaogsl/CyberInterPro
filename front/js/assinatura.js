var progressStep1 = document.querySelector("#step1");
var progressStep2 = document.querySelector("#step2");
var progressStep3 = document.querySelector("#step3");

function Progresso1(){
        progressStep1.classList.add("progress-step-active");
}

function Progresso2(){
    progressStep1.classList.add("notransition");
    progressStep2.classList.add("progress-step-active");
}
function Progresso3(){
    progressStep1.classList.add("notransition");
    progressStep2.classList.add("notransition");
    progressStep3.classList.add("progress-step-active");
}


// var form = $('#form_arquivo');
// form.submit(function(event){
//    event.preventDefault();
//    if(!$('input[name="pdf"]').val()){
//       alert("É Obrigatório Anexar Seu Currículo!" );
//    }else{
//       alert("Arquivo anexado!" );
//    }
// });

// var arquivo = document.getElementById("form_arquivo");

// function ValidaArquivo() {
//         alert ("Eu sou um alert!");
// }
// function ValidaArquivo() {
//     document.getElementById('teste').innerHTML = 'Total Files: <b>'+ arquivo.files.length + '</b></br >';
//     if (arquivo.files.length > 0) {
//         alert ("Nenhum arquivo selecionado!");
//     } else {
//         alert ("Arquivo selecionado!");
//     }
// }
// document.getElementById('teste').innerHTML = 'Total Files:';
    
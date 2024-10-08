// var senhafis = document.querySelector('#senhafis');
var senhajuri = document.querySelector('#senhajuri');
//Mostrar e Ocultar Senha

// function MostrarOcultarSenhaFis(){
   

//     if(senhafis.type=="password"){
//         senhafis.type = "text";
//     }else{
//         senhafis.type = "password";
//     }
// } 
function MostrarOcultarSenhaJuri(){
    

    if(senhajuri.type=="password"){
        senhajuri.type = "text";
    }else{
        senhajuri.type = "password";
}
}

//Trocar Formulários e Barra de Progresso
// var formfis = document.querySelector("#fisica");
var formjuri = document.querySelector("#juridica");
var formparag = document.querySelector("#pform");
var progressStep1 = document.querySelector("#step1");
var progressStep2 = document.querySelector("#step2");
var progressStep3 = document.querySelector("#step3");
// var idselect = document.querySelector("#tipo");
// var valorselect = idselect.options[idselect.selectedIndex].value;

function TrocarForm(valor){
    if (valor != ""){
        progressStep1.classList.add("progress-step-active");
        formjuri.style.display = "block";
        formparag.style.display = "block";
    }
    else{
        progressStep1.classList.remove("progress-step-active");
        formjuri.style.display = "none";
        formparag.style.display = "none";
    }
}
// function TrocarForm(valor){
//     if (valor === "1" || valor === "2"){
//         progressStep1.classList.add("progress-step-active");
//     }
//     if (valor === "2"){
//         formfis.style.display = "block";
//         formjuri.style.display = "none";
//         formparag.style.display = "block";
//     }
//     else{
//         formfis.style.display = "none";
//         formjuri.style.display = "block";
//         formparag.style.display = "block";
//     }
// }

function EsconderForm(){
    // formfis.style.display = "none";
    formjuri.style.display = "none";
    formparag.style.display = "none";
}

function Progresso2(){
    var userjuri = document.querySelector("#usernamejuri");
    var cnpj = document.querySelector("#cnpj");

    var userjurivalue = userjuri.value;
    var cnpjvalue = cnpj.value;
    var senhajurivalue = senhajuri.value;

    
    
    if ( (cnpjvalue) && (userjurivalue ) && (senhajurivalue) != ""){
        progressStep2.classList.add("progress-step-active");
    }
    else {
        progressStep2.classList.remove("progress-step-active");
    }

}


// function Progresso2(){
//     var userfis = document.querySelector("#usernamefis");
//     var userjuri = document.querySelector("#usernamejuri");
//     var cpf = document.querySelector("#cpf");
//     var cnpj = document.querySelector("#cnpj");

//     var userfisvalue = userfis.value;
//     var userjurivalue = userjuri.value;
//     var cpfvalue = cpf.value;
//     var cnpjvalue = cnpj.value;
//     var senhafisvalue = senhafis.value;
//     var senhajurivalue = senhajuri.value;

    
    
//     if ( (cpfvalue || cnpjvalue) && (userfisvalue || userjurivalue ) && (senhafisvalue || senhajurivalue) != ""){
//         progressStep2.classList.add("progress-step-active");
//     }
//     else {
//         progressStep2.classList.remove("progress-step-active");
//     }

// }
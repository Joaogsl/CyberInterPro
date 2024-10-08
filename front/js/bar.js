const voltarBtns = document.querySelectorAll(".btn-voltar")
const proxBtns = document.querySelectorAll(".btn-prox")
const progress = document.getElementById(".progress")
// const formSteps= document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

function CorProgress() {
    var select = document.getElementById("tipo");
    var num = 2;
    if (num ==2){
        progressSteps.classList.add("progress-step-active");
    }
    select.addEventListener('change', CorProgress);
    if (select.value === '1' || select.value === '2') {
        progressSteps.classList.add("progress-step-active");
    }
}    


// let formStepsNum = 3;

// proxBtns.forEach(btn => {
//     btn.addEventListener("click", () => {
//         formStepsNum++;
//         updateFormSteps();
//         updateProgressBar();
//     })

// })

// voltarBtns.forEach(btn => {
//     btn.addEventListener("click", () => {
//         formStepsNum--;
//         updateFormSteps();
//         updateProgressBar();
//     })

// })


// // function updateFormSteps(){
// //     formSteps.forEach((formStep) => {
// //         formStep.classList.contains("form-step-active") &&
// //         formStep.classList.remove("form-step-active");
// //     })
// //     formSteps[formStepsNum].classList.add("form-step-active")
// // }

// function updateProgressBar(){
//     // progressSteps.forEach((progressStep, idx) => {
//     //     if (idx < formStepsNum + 1){
//     //         progressStep.classList.add("progress-step-active");
//     //     }
//     //     else{
//     //         progressStep.classList.remove("progress-step-active");  
//     //     }
//     // })
//     progressSteps.classList.add("progress-step-active");  

// }
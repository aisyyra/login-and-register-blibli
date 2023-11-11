// cr buat tombol disable

let email = document.querySelector(".email");
let pass = document.querySelector(".pass");
let tombol = document.querySelector(".tombol");

tombol.disabled = true;

email.addEventListener("input", success);
pass.addEventListener("input", success);

function success(){
    if(email.value.length > 0 && pass.value.length > 0){
        tombol.disabled = false;
    }
    else{
        tombol.disabled = true;
    }
}
                                        //clas/id
// const password = document.querySelector(".pass");
// const togglePass = document.querySelector("#togglepass");

// togglePass.addEventListener("click", buka);

// function buka(){
//     //toggle type input
//     const type = password.getAttribute("type") === "password" ? "text" : "password";
//     password.setAttribute("type", type);

//     //toogle icon
//                                 //class-id
//     togglePass.classList.toggle("eye-slash");
// }
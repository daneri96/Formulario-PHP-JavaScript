'use strict'

document.getElementById("nombre").addEventListener('keydown',validacionNombre);
document.getElementById("apellidos").addEventListener('keydown',validacionApellido);
document.getElementById("email").addEventListener('keydown',validacionEmail);
document.getElementById("password").addEventListener('keydown',validacionPassword);



//validacion del nombre
function validacionNombre(){
    let nombre = document.getElementById("nombre").value;
    let regxNombre = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
    let validado = document.getElementById("validadoNombre");

    if(regxNombre.test(nombre)){
        validado.src ="../img/cheque.svg";
        validado.style.width ="1%";

    }else if(regxNombre.test(nombre) === ''){
        validado.style.display ="none";

    }else{

        validado.src="../img/close.svg";
        validado.style.width="1%";  
    }
}

//validacion de apellidos
function validacionApellido(){
    let apellidos = document.getElementById("apellidos").value;
    let regxApellidos = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
    let validadoApellido = document.getElementById("validadoApellido");

    if(regxApellidos.test(apellidos)){
        validadoApellido.src ="../img/cheque.svg";
        validadoApellido.style.width ="1%";

    }else if(regxApellidos.test(apellidos) === ''){
        validadoApellido.style.display ="none";

    }else{
        validadoApellido.src="../img/close.svg";
        validadoApellido.style.width="1%";  
    }
}

//validacion email
function validacionEmail(){
    let email = document.getElementById("email").value;
   let regxEmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    let validadoEmail = document.getElementById("validoEmail");

    if(regxEmail.test(email)){
        validadoEmail.src ="../img/cheque.svg";
        validadoEmail.style.width ="1%";

    }else if(regxEmail.test(email) === ''){
        validadoEmail.style.display ="none";

    }else{
        validadoEmail.src="../img/close.svg";
        validadoEmail.style.width="1%";  
    }
}

//validacion password
//La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
function validacionPassword(){
   let password = document.getElementById("password").value;
   let regxPassword = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
    let validadoPassword = document.getElementById("validoPassword");

    if(regxPassword.test(password)){
        validadoPassword.src="../img/cheque.svg";
        validadoPassword.style.width ="1%";
    }else if(regxPassword.test(password) === ''){
        validadoEmail.style.display ="none";

    }else{
        validadoPassword.src="../img/close.svg";
        validadoPassword.style.width="1%";  
    }
}



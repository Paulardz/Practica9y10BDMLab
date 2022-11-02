/*ANIMACION de Pagina*/
const sign_in_btn = document.querySelector('#sign-in-btn');
const sign_up_btn = document.querySelector('#sign-up-btn');
const container = document.querySelector('.container-fluid');

sign_up_btn.addEventListener('click', ()=>{
    container.classList.add('sign-up-mode');
});
sign_in_btn.addEventListener('click', ()=>{
    container.classList.remove('sign-up-mode');
});

/*Validaciones*/
const login_user = document.querySelector('#LoginUser')
const login_pass = document.querySelector('#LoginPass')
const login_form = document.querySelector('#LoginForm')

const SignUp_user = document.querySelector('#RegisterUser')
const SignUp_Email = document.querySelector('#RegisterEmail')
const SignUp_pass = document.querySelector('#RegisterPass')
const SignUp_form = document.querySelector('#RegisterForm')

login_form.addEventListener('submit', (e)=> {
    let messages = []
    if (login_user.value === ''|| login_user.value == null){
        messages.push('Nombre de Usuario es Requerido')
        alert('Introduzca Nombre de Usuario')
    }
    if(login_pass.value === '' || login_pass.value == null){
        messages.push('Contraseña vacia')
        alert('Introduzca su Contraseña')
    } else if(login_pass.value.length < 8){
        messages.push('Contraseña muy corta')
        alert('Contraseña debe ser minimo de 8 caracteres')
    }

    if(messages.length > 0){
        e.preventDefault()
    }
})

SignUp_form.addEventListener('submit', (e)=> {
    let messages = []

    if (SignUp_user.value === ''|| SignUp_user.value == null){
        messages.push('Nombre de Usuario es Requerido')
        alert('Introduzca un Nombre de Usuario')
    } else {
        SignUp_user.style.color = '#06691b';
    }
    if(SignUp_pass.value === '' || SignUp_pass.value == null){
        messages.push('Contraseña vacia')
        alert('Introduzca su Contraseña')
    } else if(SignUp_pass.value.length < 8){
        messages.push('Contraseña muy corta')
        alert('Contraseña debe ser minimo de 8 caracteres')
    } else {
        SignUp_pass.style.color = '#06691b';
    }
    if(SignUp_Email.value === '' || SignUp_Email.value == null){
        messages.push('Correo Electronico Vacio')
        alert('Introduzca un Correo Electronico')
    } else if(!isEmail(SignUp_Email.value)){
        messages.push('Correo Electronico invalido')
        alert('Introduzca un Correo Electronico Valido')
    } else {
        SignUp_Email.style.color = '#06691b';
    }
    

    if(messages.length > 0){
        e.preventDefault()
    }
})

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
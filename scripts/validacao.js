// ---------- VALIDAÇÃO FORMULÁRIO REGISTRO ---------- //
let nomeInput = document.getElementById("nome");
let nomeCampo = document.querySelector('label[for="nome"]');
let nomeAjuda = document.getElementById("nome-ajuda");

let emailInput = document.getElementById("email");
let emailCampo = document.querySelector('label[for="email"]');
let emailAjuda = document.getElementById("email-ajuda")

let telefoneInput = document.getElementById("telefone");
let telefoneCampo = document.querySelector('label[for="telefone"]');
let telAjuda = document.getElementById("tel-ajuda")

if(nomeInput){
nomeInput.addEventListener("input", () => {
    const usuario = nomeInput.value;
    if (usuario.length >= 3) {
        nomeInput.classList.remove("error");
        nomeInput.classList.add("correct");
        nomeAjuda.style.display = "none";

      } else if(usuario.length === 0) {
        nomeInput.classList.remove("correct");
        nomeInput.classList.remove("error");
        nomeAjuda.style.display = "none";
    } else{
        nomeInput.classList.remove("correct");
        nomeInput.classList.add("error");
        nomeAjuda.style.display = "block";
      }
  });
}

  emailInput.addEventListener("input", () => {
    const usuarioEmail = emailInput.value;
    if (usuarioEmail.includes('@')) {
        emailInput.classList.remove("error");
        emailInput.classList.add("correct");
        emailAjuda.style.display = "none";

      } else if(usuarioEmail.length === 0) {
        emailInput.classList.remove("correct");
        emailInput.classList.remove("error");
        emailAjuda.style.display = "none";

    } else{
        emailInput.classList.remove("correct"); 
        emailInput.classList.add("error");
        emailAjuda.style.display = "block";
      }
  });


  telefoneInput.addEventListener("input", () => {
    const usuarioTel = telefoneInput.value;
    if (/^\d+$/.test(usuarioTel) && (usuarioTel.length ===11)) { 
        telefoneInput.classList.remove("error");
        telefoneInput.classList.add("correct");
        telAjuda.style.display = "none";

      } else if(usuarioTel.length === 0) {
        telefoneInput.classList.remove("correct");
        telefoneInput.classList.remove("error");
        telAjuda.style.display = "none";

    } else{
        telefoneInput.classList.remove("correct"); 
        telefoneInput.classList.add("error");
        telAjuda.style.display = "block";

      }
  });


// Mostrar popup de campo obrigatório no campo input
if(nomeInput){
nomeInput.addEventListener('focus', function(){
    nomeCampo.classList.add('required-popup')
})
}

emailInput.addEventListener('focus', function(){
    emailCampo.classList.add('required-popup')
})

telefoneInput.addEventListener('focus', function(){
    telefoneCampo.classList.add('required-popup')
})


// Ocultar popup de campo obrigatório
if(nomeInput){
nomeInput.addEventListener('blur', function(){
    nomeCampo.classList.remove('required-popup')
})
}

emailInput.addEventListener('blur', function(){
    emailCampo.classList.remove('required-popup')
})

telefoneInput.addEventListener('blur', function(){
    telefoneCampo.classList.remove('required-popup')
})

const btnConcluir = document.querySelector('.btn-concluir');

btnConcluir.addEventListener('click', function(event) {
    const camposError = document.querySelectorAll('.error');
    if (camposError.length > 0) {
        event.preventDefault();
        alert('Por favor, preencha os campos corretamente para prosseguir!');
    }
});


console.log("hellow")

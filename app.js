// button dark theme
const $html = document.querySelector('html');
const $checkbox = document.querySelector('#switch');

$checkbox.addEventListener('change', function () {
    $html.classList.toggle('dark-mode')
})

//botao scroll
const btn = document.getElementById("Btn");

btn.addEventListener('click', () => window.scrollTo({
    top: 0,
    behavior: 'smooth',
}));


// Validação do formulário

/*
function validarFormulario() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var assunto = document.getElementById('assunto').value;
    var messagem = document.getElementById('mensagem').value;


    if (nome.trim() === '' || email.trim() === '' || telefone.trim() === '' || assunto.trim() === '' || messagem.trim() === '') {
        alert('Por favor, preencha todos os campos.');
        return false;
    }


    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Por favor, insira um endereço de e-mail válido.');
        return false;
    }


    alert('A mensagem foi enviada com sucesso!😀');

    document.getElementById('form').reset();

    return true;
}
*/
//botao-menu

let btnMenu = document.getElementById('btn-menu');
let menu = document.getElementById('menu-mobile');
let overlay = document.getElementById('overlay-menu');

btnMenu.addEventListener('click', () => {
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', () => {
    menu.classList.remove('abrir-menu')
})
overlay.addEventListener('click', () => {
    menu.classList.remove('abrir-menu')
})

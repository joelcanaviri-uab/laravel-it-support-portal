// Modo oscuro

const themeButton = document.getElementById("theme-toggle");

themeButton.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
});


// Menú hamburguesa

const menuButton = document.getElementById("menu-toggle");
const navLinks = document.querySelector(".nav-links");

menuButton.addEventListener("click", function () {
    navLinks.classList.toggle("active");
});


// Validación del formulario

const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

formulario.addEventListener("submit", function (event) {

    const nombre = document.querySelector("#name").value;
    const correo = document.querySelector("#email").value;

    if (nombre === "") {

        event.preventDefault();

        aviso.textContent = "Por favor, ingrese su nombre.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    } else if (!correo.includes("@")) {

        event.preventDefault();

        aviso.textContent = "Ingrese un correo electrónico válido.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    }

});
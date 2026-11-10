
/* MENÚ HAMBURGUESA */

const btnMenu = document.querySelector("#btnMenu");
const menu = document.querySelector("#menu");

if (btnMenu && menu) {
    btnMenu.addEventListener("click", () => {
        menu.classList.toggle("abierto");
        btnMenu.classList.toggle("activo");
    });

    document.querySelectorAll("#menu a").forEach(enlace => {
        enlace.addEventListener("click", () => {
            menu.classList.remove("abierto");
            btnMenu.classList.remove("activo");
        });
    });
}


/* ACCORDION */

const titulos = document.querySelectorAll(".accordion .titulo");

titulos.forEach(titulo => {
    titulo.addEventListener("click", () => {
        const item = titulo.parentElement;

        document.querySelectorAll(".accordion .item").forEach(otro => {
            if (otro !== item) {
                otro.classList.remove("activo");
            }
        });

        item.classList.toggle("activo");
    });
});


/* TARJETAS DINÁMICAS */

const servicios = [
    { titulo: "Lavado exterior", precio: 8000, img: "img/imagen1.jpg" },
    { titulo: "Pulido", precio: 15000, img: "img/imagen2.jpg" },
    { titulo: "Encerado", precio: 12000, img: "img/imagen3.jpg" },
    { titulo: "Lavado interior", precio: 10000, img: "img/imagen4.jpg" },
    { titulo: "Limpieza profunda", precio: 20000, img: "img/imagen5.jpg" },
    { titulo: "Lavado completo", precio: 25000, img: "img/imagen6.jpg" }
];

const contenedor = document.querySelector("#cards");

function pintarCards(lista) {
    contenedor.innerHTML = "";

    lista.forEach(servicio => {
        const art = document.createElement("article");
        art.classList.add("tarjeta");

        art.innerHTML = `
            <img src="${servicio.img}" alt="${servicio.titulo}">
            <h3>${servicio.titulo}</h3>
            <p>₡${servicio.precio}</p>
        `;

        contenedor.appendChild(art);
    });
}

if (contenedor) {
    pintarCards(servicios);
}


/* VALIDACIÓN DEL FORMULARIO */

const formulario = document.querySelector("#formulario");

if (formulario) {
    formulario.addEventListener("submit", (evento) => {
        const nombre = document.querySelector("#nombre").value.trim();
        const correo = document.querySelector("#correo").value.trim();
        const mensaje = document.querySelector("#mensaje").value.trim();
        const mensajes = document.querySelector("#mensajes");

        if (nombre === "" || correo === "" || mensaje === "") {
            evento.preventDefault();
            mensajes.textContent = "Todos los campos son obligatorios.";
            mensajes.style.color = "red";
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo)) {
            evento.preventDefault();
            mensajes.textContent = "Ingrese un correo electrónico válido.";
            mensajes.style.color = "red";
            return;
        }

        mensajes.textContent = "";
    });
}


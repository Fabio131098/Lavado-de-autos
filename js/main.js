const btnMenu = document.querySelector("#btnmenu");
const menu = document.querySelector("#menu");




btnMenu.addEventListener("click", () =>{
    menu.classList.toggle("abierto");
    btnMenu.classList.toggle("activo");
}) ;

//cerrar menu al hacer click en un enlace

document.querySelectorAll("#menu a").forEach((enlace) => {
    enlace.addEventListener("click", () => {
        menu.classList.remove("abierto");
        btnMenu.classList.remove("activo");
    });
}   );



//acordeon  

titulos.forEach((titulo) =>{
    titulo.addEventListener("click", () => {
        const item= titulo.parentElement;


        document.querySelectorAll(".acordion .item").forEach(otro => {
            if(otro !== item) otro.classList.remove("activo");
        });
        item.classList.toggle("activo"); 
        });

    });
}
)
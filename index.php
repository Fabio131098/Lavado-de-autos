
<?php include "header.php"; ?>

<main>
    <section class="portada">
        <h1>Lavado de autos a domicilio</h1>
        <p>Dejamos su carro como nuevo sin que tenga que salir de casa.</p>
        <a href="contacto.php" class="boton">Reservar</a>
    </section>

    <section class="servicios contenedor">
        <h2>Nuestros servicios</h2>
        <p>Conozca los servicios que ofrecemos.</p>

        <div class="cards" id="cards"></div>
    </section>

    <section class="galeria contenedor">
        <h2>Galería</h2>
        <p>Algunos de nuestros trabajos.</p>

        <div class="fotos">
            <img src="img/imagen1.jpg" alt="Ejemplo de nuestro servicio 1">
            <img src="img/imagen2.jpg" alt="Ejemplo de nuestro servicio 2">
            <img src="img/imagen3.jpg" alt="Ejemplo de nuestro servicio 3">
        </div>
    </section>

    <section class="preguntas contenedor">
        <h2>Preguntas frecuentes</h2>

        <div class="accordion">
            <div class="item">
                <button class="titulo" type="button">
                    ¿Qué servicios ofrecen?
                </button>
                <div class="contenido">
                    <p>Ofrecemos lavado exterior, pulido y encerado.</p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" type="button">
                    ¿Trabajan a domicilio?
                </button>
                <div class="contenido">
                    <p>Sí, ofrecemos atención a domicilio.</p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" type="button">
                    ¿Cómo puedo reservar?
                </button>
                <div class="contenido">
                    <p>Puede contactarnos mediante el formulario.</p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" type="button">
                    ¿Dónde puedo consultar los servicios?
                </button>
                <div class="contenido">
                    <p>Puede visitar nuestra página de servicios.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "footer.php"; ?>

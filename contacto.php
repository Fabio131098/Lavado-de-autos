
<?php include "header.php"; ?>

<main class="contenedor">
    <section class="contacto">
        <h1>Contacto</h1>
        <p>Complete el formulario para solicitar nuestros servicios.</p>

        <form action="enviar.php" method="post" class="formulario" id="formulario">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

            <p id="mensajes" aria-live="polite"></p>

            <button type="submit" class="boton">Enviar</button>
        </form>
    </section>
</main>

<?php include "footer.php"; ?>

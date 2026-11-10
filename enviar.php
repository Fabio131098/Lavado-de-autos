
<?php

// Comprobar que el formulario se envió por POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}

// Recibir los datos
$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");

// Validar que los campos no estén vacíos
if ($nombre === "" || $correo === "" || $mensaje === "") {
    exit("Error: todos los campos son obligatorios.");
}

// Validar el correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    exit("Error: el correo electrónico no es válido.");
}

// Guardar los datos del formulario en un archivo local
$registro = "Nombre: " . str_replace(["\r", "\n"], " ", $nombre) . PHP_EOL;
$registro .= "Correo: " . $correo . PHP_EOL;
$registro .= "Mensaje: " . str_replace(["\r", "\n"], " ", $mensaje) . PHP_EOL;
$registro .= "------------------------" . PHP_EOL;

$resultado = file_put_contents(
    __DIR__ . "/mensajes.txt",
    $registro,
    FILE_APPEND | LOCK_EX
);

if ($resultado === false) {
    exit("Error: no se pudo guardar el mensaje.");
}

// Mostrar la página de confirmación
header("Location: gracias.php");
exit;
?>

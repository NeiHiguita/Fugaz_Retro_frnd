<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $roleName = $_POST["roleName"];
    $rolePermissions = $_POST["rolePermissions"];
    $roleStatus = $_POST["roleStatus"];

    // Aquí deberías agregar la lógica para insertar los datos en tu base de datos o realizar otras acciones necesarias

    // Ejemplo: Insertar en una base de datos ficticia
    $response = "Rol agregado con éxito";
} else {
    $response = "Acceso no válido";
}

// Enviar la respuesta al cliente
echo $response;
?>

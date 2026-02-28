<?php
// core/config.php

// Define la configuración principal de la aplicación
$config = [
    'moneda' => 'S/', // Puedes cambiar esto a 'S/', '€', etc.
    'nombre_tienda' => 'YOCOTEX'
];

// Función auxiliar para obtener un valor de la configuración
function getConfig($key) {
    global $config;
    return $config[$key] ?? null;
}

?>
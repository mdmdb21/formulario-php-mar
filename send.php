<?php

extract($_POST); // convertir los índices en variables de un array asociativo

if (strlen(trim($nombre)) === 0 || strlen(trim($email)) === 0) {
    echo "Error. No cubriste los campos requeridos.";
} else {
    if (isset($nombre)) && (isset($apellido)) && (isset($edad)) && (isset($sexo)) && (isset($email)) && (isset($phone)) {
        echo "Hola soy $nombre $apellido! Tengo $edad años, soy $sexo, mi email es $email y mi número de teléfono es $phone";
    }else{
        echo "Gracias por completar el formulario.";
    }

}else{
    die("Permisos insuficientes.");
}

echo '<a href="javascript:history.back(-1)">Volver</a>';

?>

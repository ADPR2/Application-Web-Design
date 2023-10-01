<?php

if($_POST) {
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    echo "Hola, tu te llamas " . $nombre . " ". $apellido;
} else {
    echo "hola envia tu nombre y apellido en la anterior pantalla";
}

?>
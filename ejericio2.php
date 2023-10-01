<?php

if($_POST) {
    $edad = $_POST["edad"];
    $nombre = $_POST["nombre"];
    $estatura = $_POST["estatura"];
    $estadocivil = $_POST["estadocivil"];
    echo "El perfil de nombre: " . $nombre . ", con edad: " . $edad . " años tiene una estatura de " . $estatura . "m y es: " . $estadocivil . ".";
     
} else {
echo
"<form action='' method='post'>
Nombre: <input type='text' name='nombre'>
Edad: <input type= 'number' name='edad'><br>
Estatura: <input type='text' name='estatura'><br>
Estado Civil:
<select name= 'estadocivil'>
<option value= 'Casado' >Casado</option> <option value= 'Soltero'>Soltero</option>
</select><br>
<input type='submit' value='Submit'>
</form>";
}

?>
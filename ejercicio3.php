<?php

if($_POST) {
    $numero1 = $_POST["txtnumero"];
    $numero2 = $_POST["txtnumero2"];
    
    if($numero1>$numero2){
        echo "numero 1 es mayor y diferente";
    } elseif($numero1<$numero2){
        echo "numero 2 es mayor y diferente";
    } else {
        echo "los numeros son iguales.";
    }
    
    
} else {
    echo "NECESITO 2 NUMEROS AHORA PARA COMPARARLOS";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio algo</title>
</head>
<body>
    <form action="ejercicio3.php" method="post">
        <input type="number" name="txtnumero" placeholder="numero">
        <input type="number" name="txtnumero2" placeholder="numero2">
        <input type="submit" value="Enviar">
        </form>
</body>
</html>
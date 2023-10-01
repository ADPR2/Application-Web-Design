<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>botones</title>
</head>
<body>
<?php

$btn1 = 'btn btn-primary';
$btn2 = 'btn btn-primary';
$btn3 = 'btn btn-primary';
$mensaje1 = 'el usuario no ha presionado ningun botónn';

if ($_POST['action'] == '1') {
    $mensaje1 = 'el usuario presionó el botón 1';
    $btn1 = 'btn btn-success';
    
} else if ($_POST['action'] == '2') {
    $mensaje1 = "el usuario presionó el botón 2";
    $btn2 = 'btn btn-success';
    
} else if ($_POST['action'] == '3') {
    $mensaje1 = "el usuario presionó el botón 3";
    $btn3 = 'btn btn-success';
}


?>

<?php
echo $mensaje1
?>

<form action='ejercicio4.php' method='post'>
<input type='submit' class='<?php echo $btn1 ?>' name='action' value='1' />
<input type='submit' class='<?php echo $btn2 ?>' name='action' value='2' />
<input type='submit' class='<?php echo $btn3 ?>' name='action' value='3' />
</form>

</body>
</html>
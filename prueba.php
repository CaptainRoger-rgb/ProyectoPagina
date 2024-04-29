<?php 
session_start();

if(!isset($_SESSION['id_admin'])){
    header("Location: InicioSesion/IndexSesion.php");

}

$nombre=$_SESSION['CorreoElectronico'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>HOLA MUNDO</h2>
</body>
</html>
    
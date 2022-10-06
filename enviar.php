<?php 

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$destinatario = "ronyrubelsy31@gmail.com";
$asunto = "¡Mi estimado Rony Juárez!"; 
$cuerpo = '
    <html> 
        <head> 
            <title>Envio de correo</title> 
        </head>

        <body> 
            <h1>Mensaje de Contacto</h1>
            <p> 
                Contacto:  '.$nombre . ' - ' . $asunto .'  <br>
                Mensaje: '.$mensaje.' 
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM:<$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rony Juárez">
    <meta rel="theme-color" content="#00ff00">
    <link rel="shortcut icon" href="../img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Rony Juárez</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            
            <div class="logo">
                <a href="index.html">RJ</a>
            </div>
        
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>
</br>
    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <h1>CORREO ENVIADO</h1>
            <br>
            <h2>Regresar</h2>
            <div class="redes">
                <a href="index.html"><i class="fa-solid fa-rotate-left"></i></a>                
            </div>
        </div>
    </section>
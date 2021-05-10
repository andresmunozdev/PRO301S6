<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../css/contacto.css">
    <title>Registro</title>
</head>

<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Regístrese</h3>
    <h4>Contáctenos y le responderemos dentro de 24 horas!</h4>
    <fieldset>
      <input placeholder="Su Nombre" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Su Correo" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Su Teléfono" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Escriba su mensaje aquí...." tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <button name="enviar" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
   </div>
</body> 
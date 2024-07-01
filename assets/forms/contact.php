<?php
 
 if (true) {
  $email = trim($_POST['conEmail']);
  $nombre = trim($_POST['conName']);
  $phone = trim($_POST['conPhone']);
  $mensaje = trim($_POST['conMessage']);
  
  $consulta = "E-mail: " . $email . "Nombre: " . $nombre . "Telefono: " . $phone . "Mensaje: " . $mensaje;
  $recipient = "rsebaburgues@gmail.com";
  $asunto = "Contacto desde la web";

  mail($recipient, $asunto, $consulta);
  } else {
  echo "Error al enviar";
  }
  header('Location: https://richardburgues.com/#message_sent');
  end();
  ?>


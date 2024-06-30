<?php
 
 if (true) {
  $email = trim($_POST['conEmail']);
  $nombre = trim($_POST['conName']);
  $phone = trim($_POST['conPhone']);
  $mensaje = trim($_POST['conMessage']);
  
  $consulta = "E-mail: " . $email . "Nombre: " . $nombre . "Telefono: " . $phone . "Mensaje: " . $mensaje;
  
  mail("contacto@richardrburgues.com", "Contacto desde la web", $consulta);
  } else {
  echo "Error al enviar";
  }
  header('Location: https://http://127.0.0.1:5500/#message_sent');
  end();
  ?>
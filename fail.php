<?php
 
$nombre = $_POST['name'];
 
$mail = $_POST['email'];
  
$mensaje = $_POST['message'];
 
$para = 'diegoortizruescas@gmail.com';
 
$titulo = 'Contacto';
 
$header = 'From: ' . $mail;
 
$msjCorreo = "Nombre: $nombre\n Mail: $mail\n Mensaje:\n $mensaje";
 
if ($_POST['submit']) {
 
if (mail($para, $titulo, $msjCorreo, $header)) {
 
echo "<script language='javascript'>

alert('Mensaje enviado, muchas gracias.');

 
</script>";
 
} else {
 
echo 'Falló el envio';
 
}
 
}
 
?>
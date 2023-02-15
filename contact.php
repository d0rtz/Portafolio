<?php
 
if(isset($_POST['submit'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $msjCorreo = "Nombre: $name\n Mail: $email\n Mensaje:\n $message";
    $header = "From: " . $email . "\r\n";
    $header.= "Reply-To: " . $email . "\r\n";
    $header.= "X-Mailer: PHP/" . phpversion();
    $mail = mail("diegoortizruescas@gmail.com","Contacto nuevo", $msjCorreo, $header);
   
    if($mail) {
        echo "<script language='javascript'>

        alert('Mensaje enviado, muchas gracias.');

        </script>";
    } else {
        echo "<script language='javascript'>

        alert('Fallo al enviar.');
 
        </script>";
    }
     
} else {
    echo '<p>Algo salió mal</p>';
}
 
?>
<script type="text/javascript">
function Redirect()
{
window.location="http://d0webs.com";
}
setTimeout('Redirect()', 0);
</script>
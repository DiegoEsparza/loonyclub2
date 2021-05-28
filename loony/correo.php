<?php
    $destinatario = 'gibbeh123mess1@gmail.com';
    // esto es al correo al que se le enviara el mensaje//

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];


    $header = 'Enviado desde la pagina de Loony Club':
    $mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;
  
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente ')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\")</script>";




?>
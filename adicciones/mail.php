<?php

    $cuerpo = '
        
        Nombre: '.$_POST["nombre"].' 
        
        Correo: '.$_POST["email"].'
        
        Teléfono: '.$_POST["telefono"].'   
        
        Mensaje:
        
        '.$_POST["mensaje"].'
    ';
    
/*DEV

print_r($_POST);

exit();


*******************/

    //mando el correo...
    mail("info@institutocastelao.com", "Consulta via web. ".$_POST["nombre"].", ".$_POST["telefono"]."",$cuerpo, "From: Castelao WEB<web@institutocastelao.com>\nX-Priority: 1");

    //doy las gracias por el envío
    $url = "http://www.institutocastelao.com/gracias";
    Header("Location: $url"); 

?>

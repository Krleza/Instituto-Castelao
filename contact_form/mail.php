<?php

    $cuerpo = '
        
            
        Perfil de paciente;: '.$_POST["motivo"].' 

        Nombre del paciente : '.$_POST["nombre"].' 
        Correo electrónico de contacto: '.$_POST["email"].'
            
        Este es el mensaje del paciente:
        
        '.$_POST["mensaje"].'



    ';
    
/*DEV

print_r($_POST);

exit();


*******************/

    //mando el correo...
    mail("info@institutocastelao.com", "Consulta via web. ".$_POST["nombre"].", ".$_POST["motivo"]."",$cuerpo, "From: Castelao WEB<info@institutocastelao.com>\nX-Priority: 1");

    //doy las gracias por el envío
    $url = "http://www.institutocastelao.com/gracias";
    Header("Location: $url"); 



?>

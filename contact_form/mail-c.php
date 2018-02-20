<?php

    $cuerpo = '
        Enviado desde la web.


        Teléfono del paciente : '.$_POST["telefono"].' 
              
        Preferencia de horario para llamada: '.$_POST["horario"].'


    ';
    
/*DEV

print_r($_POST);

exit();


*******************/

    //mando el correo...
    mail("stilve@institutocastelao.com", "Consulta via web. ".$_POST["telefono"].", ",$cuerpo, "From: Castelao WEB<info@institutocastelao.com>\nX-Priority: 1");

    //doy las gracias por el envío
    $url = "http://www.institutocastelao.com/gracias";
    Header("Location: $url"); 



?>

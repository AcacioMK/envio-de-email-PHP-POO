<?php
    include 'mk_email.php';
    
    $corpoEmail = "<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
    <tr>
        <td style='text-align: center'>Corpo E-mail</td>
    </tr>
    <tr>
        <td>Título: </td>
    </tr>    
    <tr>
        <td>Assunto: </td>
    </tr>
    <tr>
        <td>Mensagem: </td>
    </tr>
    
    </table>";

    $envioEmail = new sendEmail('Seu email', 'email de destino', 'Título do email', $corpoEmail);
    
?>

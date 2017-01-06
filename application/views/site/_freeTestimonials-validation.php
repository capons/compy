<?php
/**
 * Date: 23.09.2015
 * Time: 9:56
 */
require 'email-form/PHPMailer-master/PHPMailerAutoload.php';


if (empty($_POST)) {

}
else
{
    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';
    //$mail->SMTPDebug = 1;     // Enable verbose debug output

    /*=Принимаем данные с формы--------------------------------------------*/
    $name           = isset( $_POST['name'] ) ? $_POST['name'] : '';
    $userContacts   = isset( $_POST['email'] ) ? $_POST['email'] : '';
    $idea           = isset( $_POST['idea'] ) ? $_POST['idea'] : '';
    $marker           = isset( $_POST['marker'] ) ? $_POST['marker'] : '';

    /*=Принимаем данные с формы--------------------------------------------*/
    if (isset($_FILES['attachments']) &&
        $_FILES['attachments']['error'] == UPLOAD_ERR_OK)
    {
        $mail->AddAttachment($_FILES['attachments']['tmp_name'], $_FILES['attachments']['name']);
    }
    /*=Отправка письма--------------------------------------------*/

    /*=Обработка входных данных перед отсылкой-----------------------------------*/
    $name         = strip_tags( $name );
    $userContacts = strip_tags( $userContacts );
    $idea         = strip_tags( $idea );
    $marker       = strip_tags( $marker );
    /*=Обработка входных данных перед отсылкой-----------------------------------*/

    $mail->isSMTP();                                  // Set mailer to use SMTP
    $mail->SMTPSecure   = 'TLS';                      // Enable TLS encryption, `ssl` also accepted
    $mail->Host         = 'mail.computoolsglobal.com';      // Specify main and backup SMTP servers
    $mail->Port         = '25';                     // TCP port to connect to
    $mail->SMTPAuth     = true;                       // Enable SMTP authentication
    $mail->Username     = 'test@computoolsglobal.com';      // SMTP username
    $mail->Password     = '40let72d95o';             // SMTP password

    $mail->setFrom( $userContacts, $name );
    $mail->addAddress('feedback@computoolsglobal.com', 'Grigoriy' );     // Add a recipient   hi@computoolsglobal.com
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject  = "$name";
    $mail->Body     = "Name: $name <br> Email / Skype:$userContacts <br> Idea:$idea <br> Sent from page/element:$marker";

    if (!$mail->send()) {
        //echo 'Message could not be sent1.';
    }else{
        //echo "ok";
    }
}



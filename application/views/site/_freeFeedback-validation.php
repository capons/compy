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
    $perfomance = isset( $_POST['perfomance'] ) ? $_POST['perfomance'] : '';
    $comment    = isset( $_POST['comment'] ) ? $_POST['comment'] : '';
    $marker     = isset( $_POST['marker'] ) ? $_POST['marker'] : '';

    /*=Отправка письма--------------------------------------------*/

    /*=Обработка входных данных перед отсылкой-----------------------------------*/
    $perfomance = strip_tags( $perfomance );
    $comment    = strip_tags( $comment );
    $marker     = strip_tags( $marker );
    /*=Обработка входных данных перед отсылкой-----------------------------------*/

    $mail->isSMTP();                                  // Set mailer to use SMTP
    $mail->SMTPSecure   = 'TLS';                      // Enable TLS encryption, `ssl` also accepted
    $mail->Host         = 'mail.computoolsglobal.com';      // Specify main and backup SMTP servers
    $mail->Port         = '25';                     // TCP port to connect to
    $mail->SMTPAuth     = true;                       // Enable SMTP authentication
    $mail->Username     = 'test@computoolsglobal.com';      // SMTP username
    $mail->Password     = '40let72d95o';             // SMTP password

    $mail->setFrom( "kuraleh.an@gmail.com", "feedback" );
    $mail->addAddress('feedback@computoolsglobal.com', 'Grigoriy' );     // Add a recipient
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject  = "$perfomance";
    $mail->Body     = "Perfomance:$perfomance <br> Comment:$comment <br> Sent from page/element:$marker";

    if (!$mail->send()) {
        echo 'Message could not be sent1.';
    }else{
        echo "ok";
    }
}



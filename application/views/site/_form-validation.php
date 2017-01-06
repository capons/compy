<?php
/**
 * Date: 23.09.2015
 * Time: 9:56
 */
require 'email-form/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->CharSet = 'utf-8';
//$mail->SMTPDebug = 1;     // Enable verbose debug output

/*=Принимаем данные с формы--------------------------------------------*/
$name           = isset( $_POST['name'] ) ? $_POST['name'] : '';
$company        = isset( $_POST['company'] ) ? $_POST['company'] : '';
$userContacts   = isset( $_POST['userContacts'] ) ? $_POST['userContacts'] : '';
$userMessage    = isset( $_POST['userMessage'] ) ? $_POST['userMessage'] : '';
$marker         = isset( $_POST['marker'] ) ? $_POST['marker'] : '';
/*=Принимаем данные с формы--------------------------------------------*/

/*=Отправка письма--------------------------------------------*/
if ( !empty( $_POST['inputCaptcha'] ) ) {
    if (  $_POST['inputCaptcha'] == $_SESSION['result'] ) {
        /*=Обработка входных данных перед отсылкой-----------------------------------*/
        $name           = strip_tags( $name );
        $company        = strip_tags( $company );
        $userContacts   = strip_tags( $userContacts );
        $userMessage    = strip_tags( $userMessage );
        $marker         = strip_tags( $marker );
        /*=Обработка входных данных перед отсылкой-----------------------------------*/

        $mail->isSMTP();                                  // Set mailer to use SMTP
        $mail->SMTPSecure   = 'TLS';                      // Enable TLS encryption, `ssl` also accepted
        $mail->Host         = 'mail.computoolsglobal.com';      // Specify main and backup SMTP servers
        $mail->Port         = '25';                     // TCP port to connect to
        $mail->SMTPAuth     = true;                       // Enable SMTP authentication
        $mail->Username     = 'test@computoolsglobal.com';      // SMTP username
        $mail->Password     = '40let72d95o';             // SMTP password

        $mail->setFrom( $userContacts, $name );
        $mail->addAddress( 'hi@computoolsglobal.com', 'Grigoriy' );     // Add a recipient
        //$mail->addAttachment('email-form/PHPMailer-master/examples/images/phpmailer_mini.png');
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject  = "$name";
        $mail->Body     = "Company: $company <br>
                           Email / Skype:$userContacts <br>
                           Message:$userMessage<br>
                           Sent from page/element:$marker";

        if (!$mail->send()) {
           // echo 'Message could not be sent1.';
        }else{
		//echo "ok";
	}
    } else {
        //echo "Message could not be sent2.";
    }
}
/*=Отправка письма--------------------------------------------*/
/*= Данные для CAPTCHA-----------------------------------------*/
$first_count            = rand(1, 10);
$two_count              = rand(1, 10);
$_SESSION['result']     = $first_count + $two_count;
/*= Данные для CAPTCHA------------------------------------------*/





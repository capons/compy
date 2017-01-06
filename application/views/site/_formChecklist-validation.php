<?php
/**
 * Date: 23.09.2015
 * Time: 9:56
 */
// require 'email-form/PHPMailer-master/PHPMailerAutoload.php';

$this->load->model('Emails_model');

if (!empty($_POST)) {  // && isset($_POST['markerForm'])
    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';
    // $mail->SMTPDebug = 2;     // Enable verbose debug output

     /*=Принимаем данные с формы--------------------------------------------*/
    
    $mail->AddAttachment('templates/site/img/Checklist. How to choose the best contractor for your project?.pdf');
    
    /*=Отправка письма--------------------------------------------*/

    $userContacts   = isset( $_POST['email'] ) ? $_POST['email'] : '';
    $f_name = isset( $_POST['name'] ) ? $_POST['name'] : '';
    
    /*=Принимаем данные с формы--------------------------------------------*/
    /*=Отправка письма--------------------------------------------*/
    
    /*=Обработка входных данных перед отсылкой-----------------------------------*/

    $userContacts = strip_tags( $userContacts );
    
    $email = new Emails_model();
    $email->saveEmail($userContacts);

    #mailchimp add new subscriber to list
    #load mailchimp config
    $mailchimp_config = new Config();
    $list_id = $mailchimp_config->sub_list['computools_list'];
    $key = $mailchimp_config->header_api_token;
    $email = $userContacts;
    $firstname = $f_name;
    $lastname = $f_name;
    //load mailchimp function class
    $subscriber = new Mailchimp($list_id,$key);
    //add subscriber to list
    print_r($subscriber->add_new_user($email, $firstname, $lastname));
    



    /*=Обработка входных данных перед отсылкой-----------------------------------*/

    $mail->isSMTP();                                  // Set mailer to use SMTP
    $mail->SMTPSecure   = 'TLS';                      // Enable TLS encryption, `ssl` also accepted
    $mail->Host         = 'mail.computoolsglobal.com';      // Specify main and backup SMTP servers
    $mail->Port         = '25';                     // TCP port to connect to
    $mail->SMTPAuth     = true;                       // Enable SMTP authentication
    $mail->Username     = 'test@computoolsglobal.com';      // SMTP username
    $mail->Password     = '40let72d95o';             // SMTP password

    $mail->setFrom('hi@computoolsglobal.com');
    $mail->addAddress($userContacts);     // Add a recipient   hi@computoolsglobal.com
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Body     = "Email / Skype: $userContacts ";

    if (!$mail->send()) {
//        echo 'Message could not be sent1.';
    }else{
//        echo "ok";
    }
}



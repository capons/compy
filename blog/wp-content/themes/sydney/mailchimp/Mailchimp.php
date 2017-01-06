<?php

class Mailchimp
{
    private $m_list_id = ''; //list id
    private $header_auth_token = ''; //token
    private $email = ''; //email to check subscribers

    public function __construct($list, $token)
    {
        $this->m_list_id = $list;
        $this->header_auth_token = $token;
    }

    //check user
    public function check_user()
    {
        $crl = curl_init();
        $headr = array();
        $headr[] = 'Accept: application/json';
        $headr[] = 'Content-type: application/json';
        $headr[] = 'Authorization: Bearer '.$this->header_auth_token;
        curl_setopt($crl, CURLOPT_URL, 'https://us13.api.mailchimp.com/3.0/lists/'.$this->m_list_id.'/'); //'.$list_id.'/members/'.$email
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_TIMEOUT, 10);

        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, 0);
        $rest = curl_exec($crl);
        $mailchip_result = json_decode($rest, true);
        curl_close($crl);
        if($mailchip_result['status'] == 404){
            return "<script language='javascript'>
                    var spge = '$rest';
                    console.log(spge);
                   </script>";
        } elseif ($mailchip_result['status'] == 200) { // if exist

            return "<script language='javascript'>
                    var spge = '$rest';
                    console.log(spge);
                   </script>";
        } else {
            //return $mailchip_result;
            return "<script language='javascript'>
                    var spge = '$rest';
                    console.log(spge);
                   </script>";
        }
    }

    //check member list
    public function check_members()
    {
        $crl = curl_init();
        $headr = array();
        $headr[] = 'Accept: application/json';
        $headr[] = 'Content-type: application/json';
        $headr[] = 'Authorization: Basic '.$this->header_auth_token;
        curl_setopt($crl, CURLOPT_URL, 'https://us13.api.mailchimp.com/3.0/lists/'.$this->m_list_id.'/members/'); //'.$list_id.'/members/'.$email
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($crl, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_TIMEOUT, 10);

        curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, 0);
        $rest = curl_exec($crl);
        $mailchip_result = json_decode($rest, true);
        curl_close($crl);
        /*
        return "<script language='javascript'>
                    var spge = 'Mailchimp list members detailes : $rest';
                    console.log(spge);
                   </script>";
        */
        return $mailchip_result;

    }


    //add new user
    function add_new_user($email, $fname, $lname)
    {

        $headr = array();
        $headr[] = 'Accept: application/json';
        $headr[] = 'Content-type: application/json';
        $headr[] = 'Authorization: Basic '.$this->header_auth_token;
        //data to create new user
        $data = array(
            'email_address'     => $email,
            'status'    => 'subscribed',
            'firstname' => $fname,
            'lastname'  => $lname,
            "merge_fields" => array(
                "FNAME" => $fname,
                "LNAME" => $lname,
                'contact' => ''
            )
        );
        $json_data = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://us13.api.mailchimp.com/3.0/lists/'.$this->m_list_id.'/members/');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $rest = curl_exec($ch);
        $new_user = json_decode($rest, true);
        curl_close($ch);

        if($new_user['status'] == 400){ // if subscriber exist

            return 'Member exist';
                   
        } else {
            return 'Successfully added new subscriber';
        }



    }

    //unsubscribed
    function unsubscribed($email)
    {
        $headr = array();
        $headr[] = 'Accept: application/json';
        $headr[] = 'Content-type: application/json';
        $headr[] = 'Authorization: Basic '.$this->header_auth_token;
        $headr[] = 'X-HTTP-Method-Override: PATCH';
        $data = array(
            'status'    => 'unsubscribed',
            //'email_address' => $email,
            "delete_member" > true,
            "send_goodbye" => true,
            "send_notify" => true
        );
        $hash_email = md5(strtolower($email));

        $json_data = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://us13.api.mailchimp.com/3.0/lists/'.$this->m_list_id.'/members/'.$hash_email);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $rest = curl_exec($ch);
        $unsubscribe_user = json_decode($rest, true);
        curl_close($ch);
        //return $unsubscribe_user;
        return "<script language='javascript'>
                    var spge = 'Successfully unsubscribed user : $rest';
                    console.log(spge);
                   </script>";
    }
}
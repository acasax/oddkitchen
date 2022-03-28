<?php

define('SITE_ROOT', __DIR__);
require SITE_ROOT."/component/vendor/autoload.php";
require_once SITE_ROOT . '/mailer/PHPMailer-master/class.phpmailer.php';
include SITE_ROOT . '/mailer/PHPMailer-master/class.smtp.php';
require SITE_ROOT . '/mailer/PHPMailer-master/PHPMailerAutoload.php';

class USER {

    public function returnJSON($type,$data,$params=null)
    {
        $array=[];
        $array['type']=$type;
        $array['data']=$data;
        $array['params']= $params;
        echo json_encode($array);
    }


    public function returnErrorByField($field,$errorMsg) {
       $array=[];
       $array['type']='FIELD_ERROR';
       $array['field']= $field;
       $array['msg']= $errorMsg;
       echo json_encode($array);
    }

    function send_mail($email, $message, $subject)
    {
       /* $mail = new PHPMailer();    
        $mail->IsSMTP();
        $mail->SMTPDebug  = 2;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.office365.com";
        $mail->Port = 587;
   
       

        $mail->Username = "contact@theoddkitchen.com";
        $mail->Password = "mousePad123!";
        $mail->AddAddress("contact@theoddkitchen.com", "Oddkitchen"); 
        $mail->SetFrom($email, "");
        $mail->AddReplyTo($email, "");
        $mail->Subject = 'Mesage from site';
        $mail->isHTML(true);
        $mail->MsgHTML($message);

        if(!$mail->send()){
            throw new Exception("Can't send mail!");
            return false;
        }else{
            return true;
        }*/

/*         $mail = new PHPMailer();
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->AddAddress('theoddkitchennyc@gmail.com');
        $mail->Username = "theoddkitchennyc@gmail.com";
        $mail->Password = "theoddk2022";
        $mail->SetFrom($email, 'FromEmail');
        $mail->AddReplyTo($email, 'ToEmail');
        $mail->Subject = 'Mesage from site';
        $mail->MsgHTML($message);
        */
        //$mail->SMTPDebug  = 3;
        //$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
       // $mail->IsHTML(true);
        
        //$mail->Body    = $message;

        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
       //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "theoddkitchennyc@gmail.com";
        $mail->Password = "theoddk2022";
        $mail->SetFrom($email);
        $mail->Subject = 'Mesage from site';
        $mail->Body = $message;
        $mail->AddAddress("theoddkitchennyc@gmail.com");

        if(!$mail->send()){
            return false;
        }else{
            return true;
        }
    }

}
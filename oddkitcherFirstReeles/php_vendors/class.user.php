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

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->Port       = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth   = true;
        $mail->Username = "contact@theoddkitchen.com";
        $mail->Password = "mousePad123!";
        $mail->SetFrom($email, 'FromEmail');
        $mail->addAddress($email, 'ToEmail');
        $mail->SMTPDebug = 4; 
        $mail->Mailer = "smtp";
        //$mail->SMTPDebug  = 3;
        //$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
        $mail->IsHTML(true);

        $mail->Subject = 'Mesage from site';
        $mail->Body    = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

}
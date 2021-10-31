<?php

define('SITE_ROOT', __DIR__);
require SITE_ROOT."/component/vendor/autoload.php";
require_once SITE_ROOT . '/mailer/PHPMailer-master/class.phpmailer.php';
include SITE_ROOT . '/mailer/PHPMailer-master/class.smtp.php';

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
        $mail = new PHPMailer();    
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
        }
    }

}
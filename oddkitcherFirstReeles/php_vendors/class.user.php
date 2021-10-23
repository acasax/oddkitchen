<?php

require_once "mailer/PHPMailer-master/class.phpmailer.php";
include "mailer/PHPMailer-master/class.smtp.php";

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
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "p3plzcpnl464866.prod.phx3.secureserver.net";
        $mail->Port = 465;
        //$mail->Host = "smtp.gmail.com";
        //$mail->Port = 465;
        $mail->AddAddress("contact@theoddkitchen.com"); //email unesi tvoj email
        $mail->Username = "contact@theoddkitchen.com"; //email
        $mail->Password = "mousePad123!"; //password
        $mail->SetFrom($email, "");
        $mail->AddReplyTo($email, "");
        $mail->Subject = $subject;
        $mail->MsgHTML($message);

        if(!$mail->Send()){
            throw new Exception("Can't send mail!");
            return false;
        }else{
            return true;
        }
    }

}
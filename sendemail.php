<?php 
    require 'vendor/autoload.php';

    class SendEmail{
        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("ragnarlall@gmail.com", "Ragnar Lall");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
            }catch(Exception $e){
                echo 'Email Caught : '. $e->getMessage() ."\n";
            }

        }
    }
?>
<?php
 

 # FIX: Replace this email with recipient email
       $mail_to = "info@dsgroup.uk";
     
        
        
        # Sender Data
        $subject = $_REQUEST['subject'];
        $email=  $_REQUEST['email']
        $fname = $_POST["fname"];
        $phoneno =$_POST["phoneno"];
        $message = $_POST["comment_message"];
        $name = $fname;
        
        # Mail Content
        $content = "Name: $name\n";
        $content .= "Phone: $phoneno\n";
        $content .= "Email: $email\n\n";
        $content .= "Message: $message\n\n";
        $content .= "Regards, \n\n$name\n";

        # email headers.
        $headers = 'From: webmaster@dsgroup.uk' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if($success)
        {
            echo 'Mail send';
        }
        else
        {
            echo 'Mail not send';
        }

?>
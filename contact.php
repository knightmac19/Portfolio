 <?php

    // youtube tutorial: https://www.youtube.com/watch?v=Ge_IZlC4N4o
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        // echo $name

        $email_from = "Portfolio Site";
        $email_subject = "New Message from Portfolio";
        $email_body =   "Name: $name.\n".
                        "Email: $email.\n".
                        "Message: $message.\n";
        
        $to = "pmdunn78@gmail.com";
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("location: index.html");


?>
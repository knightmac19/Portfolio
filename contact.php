 <?php
    $name = $_POST["name"];
    $email = $_POST["name"];
    $message = $_POST["name"];

    $email_from = "Portfolio Site";
    $email_subject = "New Message from Portfolio";
    $email_body =   "Name: $name.\n".
                    "Email: $email.\n".
                    "Message: $message.\n";
    
    $to = "pmdunn78@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: contact.html");

?>
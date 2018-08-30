<?php
    $name = POST['name'];
    $visitor_email = POST['email'];
    $message = POST["message"];

    $email_from = "huaj7@uci.edu";

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                      "User Message: $message.\n".;

    $to = "huaj7@uci.edu";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");



?>

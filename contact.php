<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $_POST['message'];
    $email_from = 'http://127.0.0.1:5501/contact.html'
    @email_subject = "Website Comment/Contact!"
    $email_body = "User Name: $name./n".
        "User Email: $visitor_email./n".
            "User Message: $message./n";
    $to = "u24ielfen@wbais.net";
    $headers = "From: $email_from /r/n";
    $headers.="Reply-Top: $visitor_email /r/n";
    mail($to,$email_subject, $email_body, $headers);
    header("Location: index.html");
?>
<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "jeepan@msn.com";
    $headers = "From: ".$mail;
    $txt = "You have recevied an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    //någon typ av redirect och pop-up att meddelandet är skickat

    header("Location: http://www.cms.test");
    exit();
}

?>
<?php
if (isset($_POST['sendMailSubmit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "my.webside@mtrasmussen.dk";
    $headers = "From: ".$mailFrom;
    $txt = "You have recived an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../contact.php?sendMail");
}
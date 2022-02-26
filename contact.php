<?php 
    if (isset($_POST['submit'])) {

        $to = "abrahamopiko@gmail.com";
        $subject = wordwrap($_POST['subject'], 70);
        $body = $_POST['body'];
        $header = "From: " . $_POST['email'];

        mail($to,$subject,$body,$header);

        header("Location: /index.html",TRUE);
    }
?>


<?php

    $name = $_POST['name'];
    $phone = $_POST['phone']
    $email = $_POST['email'];
    $message = $_POST['message'];


//send email
    mail("anjal.afghan93@gmail.com", "Contact Us: ".$name,  $message);

?>
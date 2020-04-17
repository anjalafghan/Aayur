<?php

    $name = $_POST['name'];
    $phone = $_POST['phone']
    $email = $_POST['email'];
    $message = $_POST['message'];


//send email
    mail("email@gmail.com", "Contact Us: ".$name,  $message);

?>
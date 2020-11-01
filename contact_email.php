<?php

if(count($_POST) > 0) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['message'];
    $phone = $_POST['phone'];
    $header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: $name <$email>";

    $body =
        @"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y H:i",time())."<br />
        <hr>
        <p> Phone Number:  $phone </p>
		<hr>
        <p> Question:  $comments</p>
		<hr>
		Email end";
		
		if(mail("waqas.shahid@hizb-ur-rahman.org, abdul.basit@hizb-ur-rahman.org, vikrocx@yahoo.com", "Hizb-ur-rahman Site Question", $body, $header)) {
            die("true");
        } else {
            die("There was an error sending the email.");
        }
	}

?>
<?php

if($_POST) {
    $name = "";
    $email = "";
    $msg = "";
    $emailBody = "";

    if(isset($_POST["name"])) {
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $emailBody = "<div>
                            <label><b>Naam: </b></label>
                            <p>".$name."</p>
                        </div>";
    }
    if(isset($_POST["email"])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST["email"]);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $emailBody .= "<div>
                            <label><b>E-mail: </b></label>
                            <p>".$email."</p>
                        </div>";
    }
    if(isset($_POST["message"])) {
        $msg = htmlspecialchars($_POST["message"]);
        $emailBody .= "<div>
                            <label><b>Bericht: </b></label>
                            <p>".$msg."</p>
                        </div>";
    }

    $headers  = "MIME-Version: 1.0" . "\r\n"
    ."Content-type: text/html; charset=utf-8" . "\r\n"
    ."From: " .$email. "\r\n";
    if(mail("contact@robosten.com", "Contact From", $emailBody, $headers)) {
        header("Location: ../contact.php");
    } else {
        echo("oops, something went wrong.");
    }
} else {
    header("Location: ../contact.php");
}

?>
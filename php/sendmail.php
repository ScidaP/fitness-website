<?php 
    if(isset($_POST['submit'])) {
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->Host='smt.gmail.com';
        $mail->Port='587';
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='webbefitness@gmail.com';
        $mail->Password='octavioberarducci23';

        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('webbefitness@gmail.com');
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);
        $mail->Subject=$_POST['subject'];
        $mail->Body='<h1 align=center>Name : '.$_POST['name'].'<br>'.$_POST['msg'];

        if(!$mail->send()){
            $result="Algo no funcionó. Intenta nuevamente.";
        } else {
            $result="Thanks ".$_POST['name']. " for contacting us. We'll get back to you soon.";
        }
    }
?>
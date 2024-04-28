<?php
    $email; $comment; $captcha;

    if(isset($_POST['email']))
        $email=$_POST['email'];
    if(isset($_POST['comment']))
        $comment=$_POST['comment'];
    if(isset($_POST['g-recaptcha-response']))
        $captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
        echo '<h2>Será que você é um robô?</h2>';
        exit;
    }

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcTI8kpAAAAAE4dwLoQAvc138V9M_kaQBygXiBn&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

    if($response['success'] == false)
    {
        echo '<h2>Inválido</h2>';
    }
    else
    {
        echo '<h2>Validado :) </h2>';
    }
?>
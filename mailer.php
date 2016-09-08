<?php

  require_once '../assets/phpmailer/PHPMailerAutoload.php';

    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])) {

   $fields = [

    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'message' => $_POST['message']


];

foreach ($fields as $field => $data) {

}


$m = new PHPMailer;

$m->isSMTP();
$m->SMTPAuth = true;
$m->SMTPDebug = false;
$m->do_debug = 0;
$m->Host = 'smtp.gmail.com';
$m->Username = 'faridmansoori91@gmail.com';
$m->Password = 'adickshun786';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->isHTML();

$m->Subject = 'Contact Form submitted';



  $m->Body = 'From:' . $fields['name'] . '(' . $fields['email'] . ')'  . '<p><b>phone:</b><br/>' . $fields['phone'] . '</p>' . '<p><b>Message</b><br/>' . $fields['message'] . '</p>';


   $m->FromName = 'Contact';





    $m->AddAddress('rjsnh1522@gmail.com', 'Pawan');

     if ($m->send()) {


        echo 'Thank You '.$_POST["name"].' We Will Contact You Soon franchise form';
       die();
    } else {
        echo 'try again later';
    }


 }
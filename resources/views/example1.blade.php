<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$ve = new hbattat\VerifyEmail($_POST['email'], 'capital.ayemyawaii@gmail.com');

var_dump($ve->verify());
if($ve->verify())
{
    echo"Email exists";
}
else{
    echo"Email does not exists";
}
    echo '<pre>';print_r($ve->get_debug());

?>

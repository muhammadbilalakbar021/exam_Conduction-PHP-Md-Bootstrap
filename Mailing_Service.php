<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mg = new Mailgun("4ebcda85898c6180d39a46d9d8742cd8-6b60e603-e5d94881");
$domain = "sandbox03ebab098f344a90b2a216496cfc23d5.mailgun.org";

$from="postmaster@sandbox03ebab098f344a90b2a216496cfc23d5.mailgun.org";
$subject="Hello this is Bilal";
//$obj=require_once('D:\Xampp\htdocs\MySqlwithPHP\Core.html');
$obj="bilal Html File test";
$htmlContent = file_get_contents("Menu.html");


$mg->sendMessage($domain, array(
    'from' => $from,
    'to' => 'muhammadbilalakbar021@gmail.com',
    'subject' => $subject,
    'text' => $obj,
    'html' => $htmlContent
));
?>
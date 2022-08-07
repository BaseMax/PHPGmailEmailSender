<?php
require "sender.php";

$username = "xxxxxxxxxx@gmail.com";
$password = "xxxxxxxxxxxxxxxxxxxx";
$sender_name = "Name";

$subject = "Subject";
$title = "Title";
$text = "Text";

$res = send_email($username, $password, $sender_name, "maxbasecode"."@gmail.com", $subject, $title, $text);
var_dump($res);

$res = send_email($username, $password, $sender_name, "xxxxxxxxxx"."@gmail.com", $subject, $title, $text);
var_dump($res);

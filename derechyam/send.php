<?php
if (isset($_GET['email'])) {
	echo "thank you";
	exit;
}
$message = <<<EOM
Contact request from site 

Name:  {$_GET['name']}
Email: {$_GET['mail']}
Subject: {$_GET['phone']}
Message: {$_GET['mess']}
EOM;
$headers = "Cc: novojiloc.ilya@gmail.com\r\nFrom: {$_GET['mail'] }\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

if (!mail('novojilov.ilya@gmail.com', 'Request for test sailing' . $region, $message, $headers)) die('mail not sent');
echo json_encode(array("reply"=>"
קיבשלנו את הבקשה שלך. ניצור קשר תיכב
	."));

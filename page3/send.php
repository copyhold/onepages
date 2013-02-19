<?php
if (isset($_GET['mail'])) exit;
$region = $_GET['region'];
$message = <<<EOM
Contact request from $region

Name:  {$_GET['name']}
Email: {$_GET['liame']}
Subject: {$_GET['subj']}
Message: {$_GET['text']}
EOM;
$headers = "Cc:optiwisemcc@gmail.com,boris.volfman@leshem-shamaim.com\r\nFrom: {$_GET['liame'] }\r\n";
if (!mail('boris.volfman@leshem-shamaim.com', 'Guidance Request from ' . $region, $message, $headers)) die('mail not sent');
echo json_encode(array("reply"=>"Your request is being processed."));

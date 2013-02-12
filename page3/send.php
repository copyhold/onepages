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

$headers = "Cc:optiwisemcc@gmail.com

From: {$_GET['liame'] }\n\n";
mail('optiwisemcc@gmail.com', 'Guidance Request from ' . $region, $message, $headers);
echo json_encode(array("reply"=>"Your request is being processed."));

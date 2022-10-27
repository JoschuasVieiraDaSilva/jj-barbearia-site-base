<?php

require __DIR__.'/Email.class.php';

$email = new email\Email();
$email->setFrom("", "");
$email->addTo("", "");
$email->addTo("", "");
$email->setSubject("");
$email->setMsgTxt("");
$email->send_gmail();

?>
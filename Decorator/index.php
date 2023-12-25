<?php

use src\MessageBold;
use src\MessageItalic;
use src\MessageView;

require 'vendor/autoload.php';

$msg = new MessageView();
$msg->setTitle('Titre 1');
$msg->setContent('content 1');

$msg2 = new  MessageItalic($msg);
$msg3 = new MessageBold($msg2);

echo $msg->show();
echo '<br>';
echo $msg2->show();
echo '<br>';
echo $msg3->show();

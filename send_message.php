<?php

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('key-33753700c10510bbc8fdad4f5cb32bc0');
# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send('sandbox4aa9525d98ff405190dca3e65488c58b.mailgun.org', [
  'from'    => $_POST['name'].' <'.$_POST['email'].'>',
  'to'      => 'norton.ngei@gmail.com',
  'subject' => $_POST['title'],
  'text'    => $_POST['content']."\n\nPhone: ".$_POST['phone']
]);

?>
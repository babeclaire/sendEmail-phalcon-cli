<?php

use Phalcon\Cli\Task;
use Phalcon\Ext\Mailer\Manager;

class MainTask extends Task
{
    public function mainAction()
    {
        echo "This is the default task and the default actiondff" . PHP_EOL;
    }
    /**
     * @param array $params
     */
      public function testAction()
    {
        echo "I will get printed too!" . PHP_EOL;
    }
    public function sendEmailAction() {

		$config = [
			'driver' => 'smtp',
			'host' => 'smtp.live.com',
			'port' => 587,
			'encryption' => 'tls',
			'username' => 'fsfsff@hotmail.com',
			'password' => 'sdfsdfsf',
			'from' => [
				'email' => 'fsfsff@hotmail.com',
				'name' => 'CLAIRE FENELON',
			],
		];
		$mailer = new Manager($config);
		$message = $mailer->createMessage()
			->to('ssdfsdf@gmail.com', 'rfrege')
			->subject('Reminder!')
			->content('As you can see in the table of the link above, background-image, does not work in the most used mail clients currently: hotmail');
		// Set the Cc addresses of this message.
		$message->cc('guzmandebora370@gmail.com');
		// Set the Bcc addresses of this message.
		$message->bcc('fsfsff@hotmail.com');
		// Send message
		$message->send();
	}

}
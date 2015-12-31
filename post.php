<?php

require_once __DIR__.'/vendor/autoload.php';

use Message\Message;
use Request\Request;


try {

    $request = new Request();
    $message = new Message();
    $message->add($request);

} catch (\Exception $e){

    echo $e->getMessage().PHP_EOL;

}


header('Location: index.php');


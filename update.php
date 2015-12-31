<?php

require __DIR__.'/vendor/autoload.php';

(new \Message\Message())->update(new \Request\Request());

header('Location: index.php');
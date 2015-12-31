<?php

require __DIR__.'/vendor/autoload.php';

(new \Message\Message())->remove(new Request\Request());

header('Location: index.php');
<?php

require_once './vendor/autoload.php';

$test = new \telegramapi\SimpleTelegram();
echo $test->init();
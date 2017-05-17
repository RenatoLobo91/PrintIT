<?php

require 'vendor/autoload.php';

use \Ainet\Controllers\AuthenticationController;

$controller = new Ainet\Controllers\AuthenticationController();
$controller->signIn();


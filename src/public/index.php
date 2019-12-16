<?php

//require_once '../views/index.phtml';
require_once '../vendor/autoload.php';
require_once '../controllers/Scan.php';

$scanDir = new Scan();
$result = $scanDir->scanner("../../");

dump($result);

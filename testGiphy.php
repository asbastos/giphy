<?php

require_once __DIR__ . '/vendor/autoload.php';

use Giphy\Giphy;

$search = new Giphy();
echo $search->searchGif('cat');




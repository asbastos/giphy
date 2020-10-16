<?php

require_once __DIR__ . '/vendor/autoload.php';

use Giphy\Giphy;

$search = new Giphy();
print_r($search->searchSticker('cat'));

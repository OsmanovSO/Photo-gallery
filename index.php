<?php
require_once __DIR__ . '/functions/autoload.php';

$items = Photos::getAll();

include __DIR__ . '/views/index.php';

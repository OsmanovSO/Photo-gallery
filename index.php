<?php
require_once __DIR__ . '\Models\Photos.php';

$items = Photos::getAll();

include __DIR__ . '/views/index.php';
<?php

require_once __DIR__ . '/functions/autoload.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = new Photos;
    $delete->delete($id);
    header('Location: /');
}
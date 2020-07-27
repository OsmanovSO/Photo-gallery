<?php
require_once __DIR__ . '/functions/autoload.php';

    if (isset($_GET['text'])) {
        $id = $_GET['text'];

            $res = new Photos;
            $res->Photo_delite($id);
            header('Location: /');
        }



include __DIR__ . '/views/delitePhoto.php';
?>
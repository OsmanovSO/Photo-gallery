<?php
require_once __DIR__ . '/functions/autoload.php';
require_once __DIR__ . '/functions/File_upload.php';

if (!empty($_POST))
{
    $data = [];
    if (!empty($_POST['title']))
    {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_FILES))
    {
       $res = upload('image');
         if (false !== $res)
         {
             $data['image'] = $res;

         }
    }

    if (isset($data['title']) && isset($data['image']))
    {
        $res = new Photos;
        $res->Photo_insert($data);
        header('Location: /');
    }

}

include __DIR__ . '/views/addPhoto.php';
?>
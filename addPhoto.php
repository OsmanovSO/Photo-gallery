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

        $downloadedFileLocation = File_upload::upload('image');
         if (false !== $downloadedFileLocation)
         {
             $data['image'] = $downloadedFileLocation;

         }
    }

    if (isset($data['title']) && isset($data['image']))
    {
        $insert = new Photos;
        $insert->insert($data);
        header('Location: /');
    }

}

include __DIR__ . '/views/addPhoto.php';
?>
<?php
//Класс для добавления файлов

/**
 * Class File_upload
 */
class File_upload{
    /**
     * @param $file
     * @return bool|string
     */
    public static function upload($file)
    {
        if (empty($_FILES))

            return false;

        if (0 != $_FILES[$file]['error'])

            return false;

        if (is_uploaded_file($_FILES[$file]['tmp_name'])) {
            $downloadedFileLocation = move_uploaded_file($_FILES[$file]['tmp_name'], __DIR__ . '/../img/' . $_FILES[$file]['name']);

            if (!$downloadedFileLocation) {
                return false;
            } else {
                return '/img/' . $_FILES[$file]['name'];
            }
        }
        return false;
    }
}


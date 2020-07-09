<?php

class Photos
{
    public $id;
    public $title;
    public $patch;

    public static function getAll()
    {
        $db = new DB;
        return $db->query('select * FROM news', 'Photos');
    }
    public function Photo_insert($data)
    {
        $db = new DB;
        $db->exec("INSERT INTO news (title, patch) VALUES ('" . $data['title'] . "', '" . $data['image'] . "')");
    }
    public function Photo_delite($id)
    {
        $db = new DB;
        $db->delite("DELETE FROM news WHERE id = $id");
    }
}

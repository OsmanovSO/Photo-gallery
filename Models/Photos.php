<?php

/**
 * Class Photos
 */
class Photos
{
    /**
     * @var
     */
    public $id;
    public $title;
    public $patch;
//Функция выборки фотографий из БД

    /**
     * @return array|bool
     */
    public static function getAll()
    {
        $db = new DB;
        return $db->query('select * FROM news', 'Photos');
    }
    //Функция добавления фотографий в БД

    /**
     * @param $data
     */
    public function insert($data)
    {
        $db = new DB;
        $db->exec("INSERT INTO news (title, patch) VALUES ('" . $data['title'] . "', '" . $data['image'] . "')");
    }
    //Функция удаления фотографий из БД

    /**
     * @param $id
     */
    public function delete($id)
    {
        $db = new DB;
        $db->delete("DELETE FROM news WHERE id = $id");
    }
}

<?php

class DB
{
    public function __construct()
    {
        require_once '/configFile/configFileDB.php';
        
        mysql_connect($host, $user, $password);
        mysql_select_db($database);
    }



    public function query($sql, $class = 'stdClass')
    {
        $res = mysql_query($sql)or die('Ошибка! Код ошибки: '.mysql_error());
        if (false == $res)
        {
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_object($res, $class))
        {
            $ret[] = $row;
        }
        return $ret;
    }

    public function exec($sql)
    {
        mysql_query($sql)or die('Ошибка! Код ошибки: '.mysql_error());
    }

    public function delite($sql)
    {
        mysql_query($sql)or die('Ошибка! Код ошибки: '.mysql_error());
    }
}
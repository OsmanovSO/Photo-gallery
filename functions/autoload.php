<?php
/**
 * @param $myclass
 */
function __autoload($myclass)
{
    if (file_exists(__DIR__ . '/../Models/' . $myclass . '.php'))
        require __DIR__ . '/../Models/' . $myclass . '.php';
    else if (file_exists(__DIR__ . '/../Classes/' . $myclass . '.php'))
        require __DIR__ . '/../Classes/' . $myclass . '.php';
}
<?php

class Logger
{
    const LOG_NAME = "control.log";
    private static $_instance;

    //Создаем приватный конструктор
    private function __construct(){}

    //клон тоже нужно вызвать приватным
    private function __clone(){}

    static function getInstance()
    {
        if (!self::$_instance)
            self::$_instance = new self;
        return self::$_instance;
    }

    static function log($msg)
    {
        file_put_contents(self::LOG_NAME, $msg."\n",
            FILE_APPEND);
    }
}

$log = Logger::getInstance();
$log->log("Контрольная точка на строке " . __LINE__);

$conf = Logger::getInstance();
$conf->log("Контрольная точка на строке " . __LINE__);
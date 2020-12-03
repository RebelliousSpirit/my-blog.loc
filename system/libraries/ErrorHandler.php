<?php


namespace system\libraries;


class ErrorHandler
{
    protected $messages;

    public function __construct()
    {
        if (DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }

        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e){

        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());

        $this->displayError($e->getMessage(), $e->getFile(), $e->getLine());

    }

    protected function logErrors($message = '', $file = '', $line = ''){
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n=====\n",
            3, LOGS . 'logs.txt');
    }

    protected function displayError(){

    }
}
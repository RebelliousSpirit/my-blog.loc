<?php


namespace system\libraries;


use system\helpers\THelperMethods;

class ErrorHandler
{
    protected $messages;

    use THelperMethods;

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

        $error_str = ' Message: ' .  $e->getMessage() . ' file: ' . $e->getFile() . ' in line: ' . $e->getLine();

        $this->logError($error_str, 'log.txt', 'Exception');

        $this->displayError($error_str, $e->getCode());

    }

    protected function displayError($message, $code = 1){

        if (DEBUG){
            require_once CORE .
        }
    }
}
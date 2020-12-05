<?php


namespace system\helpers;

trait THelperMethods
{
    protected function logError($message, $file = 'log.txt', $event = 'Fault'){

        $str = $event . ': ' . date('d-m-Y G:i:s') . ' - ' . $message . "=================\r\n";

        file_put_contents( LOGS . $file, $str, FILE_APPEND);

    }

    protected function redirect($http = false, $code = false){

        if ($code){

            $codes = [
                '301' => 'HTTP/1.1 301 Move Permanently'
            ];

            if ($codes[$code]) header($codes[$code]);

        }

        if($http){
            $redirect = $http;
        } else {
            $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ROOT;
        }

        header("Location: $redirect");

        exit;

    }
}
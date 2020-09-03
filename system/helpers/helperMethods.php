<?php


namespace system\helpers;

trait helperMethods
{

    public function writeLogs($message, $filename = 'logs.txt'){

        $date = new \DateTime();

        $str = $date->format('d-m-Y G:i:s') . ' - ' . $message . "\r\n";

        file_put_contents('system/logs/' . $filename, $str, FILE_APPEND);

    }

}
<?php
session_start();

if (!isset($_SESSION['user'])){
    $_SESSION['user'] = [];
}

include_once 'system/config/config.php';
include_once  'system/start.php';

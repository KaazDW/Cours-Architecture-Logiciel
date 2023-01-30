<?php
session_start();

const APP = __DIR__ . "/";

$path = $_SERVER["PATH_INFO"] ?? "/";

switch ($path){
    case "/":
        require_once APP . "/index.php";
        break;
    case "/login":
        require_once APP . "/login.php";
        break;
    case "/tdl":
        require_once APP . "/todo-list.php";
        break;    
}
<?php
    session_start();
    require_once __DIR__. "/../../Libraries/Database.php";
    require_once __DIR__. "/../../Libraries/Function.php";
    $db = new Database;


    define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/PHP/Public/uploads/");
?>

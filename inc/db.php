<?php

    include_once __DIR__ . '/config.php';
    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);

?>
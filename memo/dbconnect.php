<?php
try {
    //PDO = PHP data Object = PHPでDBを扱うためのオブジェクト
    $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');
} catch(PDOException $e) {
    echo 'DB接続エラー：' . $e->getMessage();
}
?>
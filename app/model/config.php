<?php
// db接続文字列の外部化
function getDb()
{
    $dsn = 'mysql:dbname=mokumoku; host=localhost; charset=utf8';
    $user = 'organizer';
    $password = 'user';

    $db = new PDO($dsn, $user, $password, [PDO::ATTR_PERSISTENT => true]);
    return $db;
}

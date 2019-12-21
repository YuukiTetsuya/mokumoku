<?php
// db接続文字列の外部化
function getDb()
{
    $dsn = 'mysql:dbname=mokumoku; host=ec2-18-188-212-80.us-east-2.compute.amazonaws.com; charset=utf8';
    $user = 'organizer';
    $password = 'user';

    $db = new PDO($dsn, $user, $password, [PDO::ATTR_PERSISTENT => true]);
    return $db;
}

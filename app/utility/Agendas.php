<?php
// 個別投稿用の一意のリソースを作成
$post_id = uniqid(str_pad(mt_rand(), 10, "0", STR_PAD_LEFT), true);

// アジェンダ用配列
    $agendas = [
        'title' => 'もくもく会概要',
        'mokumokuname' => 'もくもく会名',
        'schedule' => 'タイムスケジュール',
        'contents' => 'コンテンツ',
        'rule' => 'ルール',
        'wifi' => 'WiFi情報',
        'ssid' => 'SSID',
        'pass' => 'PASS',
        'post_id' => $post_id,
    ];

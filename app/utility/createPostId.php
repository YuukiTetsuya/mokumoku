<!-- 投稿キー作成用 -->
<?php
// 個別投稿用の一意のリソースを作成
$post_id = uniqid(str_pad(mt_rand(), 10, "0", STR_PAD_LEFT), true);

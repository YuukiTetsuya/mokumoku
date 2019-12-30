<!-- 投稿キー作成用 -->
<?php
require_once 'app/utility/Encode.php';

// ユーザーが入力したパスワードをハッシュ化
$passwordUser = e($_POST['password']);
$password = password_hash($passwordUser, PASSWORD_DEFAULT);

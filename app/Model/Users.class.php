<?php
namespace app\Model;

require_once 'config.php';
require_once 'app/utility/Encode.php';

use \PDO;
use \PDOException;
use \DateTime;

class Users
{
    // ユーザーが入力したユーザーidとパスワードが一致している場合のみ、ログイン日時を更新してユーザー情報を返す
    public function selectLoginUsers(string $user_id, string $password)
    {
        try {
            $db = getDb();
            $stt = $db->prepare('SELECT * FROM users WHERE user_id = :user_id');
            $stt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
            $stt->execute();
            $result = $stt->fetch(PDO::FETCH_ASSOC);
            // ユーザーidが一致していたら、日付とログインフラグをtrueにし、ユーザー情報を返す
            if ($result['user_id'] === $user_id) {
                if (password_verify($password, $result['password'])) {
                    $_SESSION['login']['logined'] = 'ログインしました';
                    $db->beginTransaction();
                    $date = new DateTime();
                    $date = $date->format('Y-m-d H:i:s');
                    $stu = $db->prepare('UPDATE users SET `status` = 1,logined = :logined WHERE user_id = :user_id');
                    $stu->bindParam(':logined', $date, PDO::PARAM_STR);
                    $stu->bindParam(':user_id', $user_id, PDO::PARAM_STR);
                    $stu->execute();
                    $sts = $db->prepare('SELECT * FROM users WHERE user_id = :user_id');
                    $sts->bindParam(':user_id', $user_id, PDO::PARAM_STR);
                    $sts->execute();
                    $result = $sts->fetch(PDO::FETCH_ASSOC);
                    $getLoginUser = $result;
                    $db->commit();
                } else {
                    $_SESSION['login']['logined'] = '認証に失敗しました';
                    $_SESSION['login']['passwordNo'] = 'パスワードが違います';
                }
            } else {
                $_SESSION['login']['logined'] = '認証に失敗しました';
                $_SESSION['login']['useridNo'] = 'ユーザーIDが違います';
            }
        } catch (PDOException $e) {
            $db->rollBack();
            "エラーが発生しました:{$e->getMessage()}";
        }
        return $getLoginUser;
    }

    public function selectLogoutUsers(string $user_id, string $password)
    {
        try {
            $db = getDb();
            $stt = $db->prepare('SELECT * FROM users WHERE user_id = :user_id');
            $stt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
            $stt->execute();
            $result = $stt->fetch(PDO::FETCH_ASSOC);
            if ($result['user_id'] === $user_id) {
                if ($password === $result['password']) {
                    $_SESSION['logout']['logouted'] = 'ログアウトしました';
                    $db->beginTransaction();
                    $date = new DateTime();
                    $date = $date->format('Y-m-d H:i:s');
                    $stu = $db->prepare('UPDATE users SET `status` = 0,logouted = :logouted WHERE user_id = :user_id');
                    $stu->bindParam(':logouted', $date, PDO::PARAM_STR);
                    $stu->bindParam(':user_id', $user_id, PDO::PARAM_STR);
                    $stu->execute();
                    $sts = $db->prepare('SELECT * FROM users WHERE user_id = :user_id');
                    $sts->bindParam(':user_id', $user_id, PDO::PARAM_STR);
                    $sts->execute();
                    $result = $sts->fetch(PDO::FETCH_ASSOC);
                    $getLogoutUser = $result;
                    $db->commit();
                } else {
                    $_SESSION['logout']['logouted'] = 'ログアウトに失敗しました';
                    $_SESSION['logout']['passwordNo'] = 'ユーザーが違います'.$result['password'];
                }
            } else {
                $_SESSION['logout']['logouted'] = 'ログインに失敗しました';
            }
        } catch (PDOException $e) {
            $db->rollBack();
            "エラーが発生しました:{$e->getMessage()}";
        }
        return $getLogoutUser;
    }
}

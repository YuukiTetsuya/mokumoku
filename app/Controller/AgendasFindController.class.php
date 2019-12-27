<?php
namespace app\Controller;

require_once 'app/Model/Agendas.class.php';
require_once 'app/utility/Encode.php';

use app\Model\Agendas;

// ユーザが投稿したidに対応するレコードを返すコントローラ
class AgendasFindController extends Agendas
{
    public $find = 0;
    public $search = 0;

    public function __construct()
    {
        // 検索キーワードを代入
        if (isset(($_GET['keyword'])) && $_GET['keyword'] !== '') {
            $this->search = '%'.e($_GET['keyword']).'%';
        } else {
            $this->search = '';
        };
    }

    public function setFindAgendas($param, $limit)
    {
        $this->find = parent::selectLimitAgendas($param, $limit);
    }

    public function getFindAgendas()
    {
        // 検索キーワードと同じ名前を持つもくもく名のレコードを返す
        return $this->find;
    }
}

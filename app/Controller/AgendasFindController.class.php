<?php
namespace app\Controller;

require_once 'app/Model/Agendas.class.php';
require_once 'app/utility/Encode.php';

use app\Model\Agendas;

// ユーザが投稿したidに対応するレコードを返すコントローラ
class AgendasFindController extends Agendas
{
    private $find = 0;
    public $search = 0;

    public function __construct()
    {
        // 検索キーワードを代入
        if (isset(($_GET['q'])) && $_GET['q'] !== '') {
            $this->search = '%'.e($_GET['q']).'%';
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

    // ページネーションの値を返す関数
    public function getPagePrevNext()
    {
        global $current;
        global $getPaging;
        if (isset(($_GET['page']))) {
            $next = e($_GET['page']) + 1;
            $current = e($_GET['page']);
            $prev = e($_GET['page']) - 1;
        } elseif (!isset(($_GET['page']))) {
            $next = 2;
            $current = 1;
            $prev = 0;
        }
        $getPaging = [
            'current' => $current,
            'prev' => $prev,
            'next' => $next,
        ];
        return $getPaging;
    }
}

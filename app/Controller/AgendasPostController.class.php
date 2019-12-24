<?php
namespace app\Controller;

require_once 'app/model/Agendas.class.php';

use app\model\Agendas;

// ユーザが投稿したidに対応するレコードを返すコントローラ
class AgendasPostController extends Agendas
{
    private $post = 0;

    public function __construct(string $param)
    {
        $this->post = parent::selectWhereAgendas($param);
    }

    public function getPostAgendas()
    {
        return $this->post;
    }
}

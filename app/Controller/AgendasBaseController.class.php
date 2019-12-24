<?php
namespace app\Controller;

require_once 'app/model/Agendas.class.php';

use app\model\Agendas;

// 引数の値に応じて、降順ソートしたレコードを任意の数取得できるコントローラ
class AgendasBaseController extends Agendas
{
    private $foo = 0;
    private $param = 0;
    private $limit = 0;
    private $result = 0;
    private $resultTen = 0;
    private $resultOne = 0;

    // コンストラクタ引数が0であれば0、0以外であれば指定値をセット
    public function __construct($foo)
    {
        $this->param = $foo;
    }

    // セッターベース
    private function setBase($param)
    {
        // 10がセットでresultTen、1でセットでresultOne、それ以外でコンストラクタ値が1以上であればコンストラクタ値でresult、それ以外でコンストラクタ値が0であれば0でresultを返す
        if ($this->limit == 10) {
            $this->resultTen = parent::selectDescAgendas($this->limit);
        } elseif ($this->limit == 1) {
            $this->resultOne = parent::selectDescAgendas($this->limit);
        } elseif (!$this->param == 0) {
            $this->result = parent::selectDescAgendas($this->param);
        } else {
            $this->result = parent::selectDescAgendas($this->foo);
        }
    }

    // セッター小分け
    public function setAgendas($param)
    {
        $this->limit = $param;
        $this->setBase($param);
    }

    // セットした値が0以外であれば10を返す
    public function getTenAgendas()
    {
        if (!$this->resultTen == 0) {
            return $this->resultTen;
        }
        // セット値が無効である場合、初期値（コンストラクタ値）でresultを返す
        return $this->result;
    }

    // セットした値が0であれば1を返す
    public function getOneAgendas()
    {
        if (!$this->resultOne == 0) {
            return $this->resultOne;
        }
        // セット値が無効である場合、初期値（コンストラクタ値）でresultを返す
        return $this->result;
    }
}

<?php
namespace app\Controller;

require_once 'app\model\Agendas.class.php';

use app\model\Agendas;

class AgendasEditController extends Agendas
{
    private $edit = 0;

    public function setEditAgendas(string $param)
    {
        $this->edit = parent::updateWhereAgendas($param);
    }
}

<?php
namespace app\Controller;

require_once 'app/Model/Agendas.class.php';

use app\Model\Agendas;

class AgendasEditController extends Agendas
{
    private $edit = 0;

    public function setEditAgendas(string $param)
    {
        $this->edit = parent::updateWhereAgendas($param);
    }
}

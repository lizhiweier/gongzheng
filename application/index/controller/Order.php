<?php


namespace app\index\controller;

use app\common\controller\Frontend;

class Order extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function orderwinfo()
    {

        return $this->view->fetch();
    }

}
<?php


namespace app\index\controller;

use app\common\controller\Frontend;

class Order extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    //微信公众号迁移表单
    public function orderform()
    {
        if ($this->request->isPost()) {
            $params1 = $this->request->post("row1/a");
            $params2 = $this->request->post("row2/a");
            $params3 = $this->request->post("row3/a");
            $params4 = $this->request->post("row4/a");
            dump($params1);
            dump($params2);
            dump($params3);
            dump($params4);die;

        }
        //获取地址栏订单随机数，判断随机数是否和订单数据表一致
        $randstr = input('msg');
        $orderModel = new \app\admin\model\dingdan\Order();
        $orderInfo = $orderModel->field('id,status,numbering,createtime,gl_id')->where(['randstr'=>$randstr])->find();
        if(!$orderInfo){
            $this->assign('message','您的上传资料链接有误！请联系管理员......');
            return $this->view->fetch('msgerror');
        }
        $orderInfo = $orderInfo->toArray();
        if($orderInfo['status'] == 1){
            return $this->view->fetch();
        }else{
            $data = $this->checkmsg($orderInfo['status']);
            $data['randstr'] = $randstr;
            if($orderInfo['status'] ==1 || $orderInfo['status'] ==2){
                $orderGlModel = new \app\admin\model\OrderGl();
                $orderGlName = $orderGlModel->field('name')->where(['id'=>$orderInfo['gl_id']])->find();
                $orderGlName = $orderGlName->toArray();
                $this->assign('name',$orderGlName['name']);
            }
//            dump($orderInfo);die;
            $this->assign('info',$orderInfo);
            $this->assign('data',$data);
            return $this->view->fetch($data['url']);

        }

    }

    //微信公众号资料上传
    public function orderupload(){

        return $this->view->fetch();
    }

    //链接错误
    public function msgerror($message){

        return $this->view->fetch();
    }

    public function orderinfo(){
        return $this->view->fetch();
    }

    /*
     * 判断当前订单参数是否存在
     */
    public function checkmsg($status){
        //根据订单状态status，跳转步骤
        if($status == 0){
            $data['message'] = '请联系管理员先付款.....';
            $data['url'] = 'msgerror';
            return $data;
        }
        if($status == 1){
            $data['message'] = '上传资料';
            $data['link'] = 'orderform';
            $data['url'] = 'orderinfo';
            return $data;
        }
        if($status == 2){
            $data['message'] = '上传资料';
            $data['link'] = 'orderupload';
            $data['url'] = 'orderinfo';
            return $data;
        }
        if($status == 3){
            $data['message'] = '正在审核材料，请稍后再试.....';
            $data['url'] = 'msgerror';
            return $data;
        }
        if($status == 4){
            $data['message'] = '该订单已完成.....';
            $data['url'] = 'msgerror';
            return $data;
        }
    }


}
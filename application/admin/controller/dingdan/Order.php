<?php

namespace app\admin\controller\dingdan;

use app\common\controller\Backend;
use app\common\library\Email;
use think\Db;
use think\exception\PDOException;
use think\exception\ValidateException;

/**
 * 
 *
 * @icon fa fa-circle-o
 */
class Order extends Backend
{
    
    /**
     * Order模型对象
     * @var \app\admin\model\dingdan\Order
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\dingdan\Order;
        $this->view->assign("isErtificationList", $this->model->getIsErtificationList());
        $this->view->assign("sourceList", $this->model->getSourceList());
        $this->view->assign("statusList", $this->model->getStatusList());
    }
    
    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    

    /**
     * 查看
     */
    public function index()
    {
        //当前是否为关联查询
        $this->relationSearch = false;
        //设置过滤方法
        $this->request->filter(['strip_tags', 'trim']);
        if ($this->request->isAjax())
        {
            //如果发送的来源是Selectpage，则转发到Selectpage
            if ($this->request->request('keyField'))
            {
                return $this->selectpage();
            }
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();
            $total = $this->model
                    
                    ->where($where)
                    ->order($sort, $order)
                    ->count();

            $list = $this->model
                    
                    ->where($where)
                    ->order($sort, $order)
                    ->limit($offset, $limit)
                    ->select();

            foreach ($list as $row) {
                $row->visible(['numbering','gl_id','matter','country','notary','channel','source','price','contname','mobile','pay_method','status','remarks','createtime']);
                
            }
            $list = collection($list)->toArray();
            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }

    /**
     * 联系人信息填写
     */
    public function certiInfo(){
        //获取业务id，管理员id，将管理员信息自动填充表单
        $gid = $this->request->get('gid');
        $mid = $this->auth->id;
        if (!$gid) {
            $this->error(__('No Results were found'));
        }
        $admininfo = \think\Session::get('admin');
        if ($this->request->isPost()) {
            $params = $this->request->post("row/a");
            //在$params数组中添加数据库需要的信息
            $orderGlModel = model('orderGl');
            $orderGlInfo = $orderGlModel->field('price') ->where('id',3) -> find();
            $orderGlInfo = $orderGlInfo->toArray();
            //订单号
            $data = getDate();
            $orderid = 'HBKJ'.$data['year'].$data['mon'].$data['mday'].$data['hours'].$data['minutes'].$data['seconds'].rand(10000,99999);
//            dump($orderGlInfo);die;
            //根据业务id获得业务名称
            $params['admin_id'] = $mid;
            $params['gl_id'] = (int)$gid;
            $params['numbering'] = $orderid;
            $params['channel'] = $admininfo['comname'];
            $params['price'] = $orderGlInfo['price'];
            $params['createtime'] = time();
            $params['randstr'] = $this->GetRandStr();


            if($params){
                $params = $this->preExcludeFields($params);
            }
            if ($this->dataLimit && $this->dataLimitFieldAutoFill) {
                $params[$this->dataLimitField] = $this->auth->id;
            }
            $result = false;
            Db::startTrans();
            try {
                //是否采用模型验证
                if ($this->modelValidate) {
                    $name = str_replace("\\model\\", "\\validate\\", get_class($this->model));
                    $validate = is_bool($this->modelValidate) ? ($this->modelSceneValidate ? $name . '.add' : $name) : $this->modelValidate;
                    $this->model->validateFailException(true)->validate($validate);
                }

                $result = $this->model->allowField(true)->save($params);
//                dump($result);die;
                Db::commit();
            } catch (ValidateException $e) {
                Db::rollback();
                $this->error($e->getMessage());
            } catch (PDOException $e) {
                Db::rollback();
                $this->error($e->getMessage());
            } catch (Exception $e) {
                Db::rollback();
                $this->error($e->getMessage());
            }
            if ($result !== false) {
                //数据更新成功，调起支付
                $this->pay($gid,$params['pay_method'],$orderid);
            } else {
                $this->error(__('No rows were inserted'));
            }
        }
        $this->view->assign('admininfo',$admininfo);
        return $this->view->fetch();
    }

    /**
     * 支付
     * $gid 业务所属ID
     * $type 支付类型
     * $orderid 订单号
     */
    public function pay($gid,$type,$orderid){
        //业务信息
        $orderGlModel = model('orderGl');
        $orderGlInfo = $orderGlModel->field('price,name') ->where('id',$gid) -> find();
        $orderGlInfo = $orderGlInfo->toArray();
        //价格
        $amount = $orderGlInfo['price'];
        //订单标题
        $title = $orderGlInfo['name'].'支付';
        //回调链接
        $notifyurl = $this->request->root(true).'/dingdan/order/notifywx/';
        //返回链接
        $returnurl = $this->request->root(true).'/dingdan/order/paysuccess/';
        $method = 'web';
        $params = [
            'amount'=>$amount,
            'orderid'=>$orderid,
            'type'=>$type,
            'title'=>$title,
            'notifyurl'=>$notifyurl,
            'returnurl'=>$returnurl,
            'method'=>$method,
//            'openid'=>"用户的OpenID",
//            'auth_code'=>"验证码"
        ];
        \addons\epay\library\Service::submitOrder($params);
    }

    public function notifywx(){
        $paytype = $this->request->param('paytype');
        $pay = \addons\epay\library\Service::checkNotify($paytype);
        if (!$pay) {
            $this->error('签名错误');
            die;
        }
        $data = $pay->verify();
        try {
            $payamount = $paytype == 'alipay' ? $data['total_amount'] : $data['total_fee'] / 100;
            $numbering = $data['out_trade_no'];

            //你可以在此编写订单逻辑
            $orderModel = new \app\admin\model\dingdan\Order();
            $z = $orderModel->save(['status' => '1'], ['numbering' => $numbering]);
            if($z){
                //发送邮件
                $orderInfo = $this->model->field('randstr,email')->where('numbering',$numbering)->find();
                $orderInfo = $orderInfo->toArray();
                $result = $this->send_email($orderInfo['email'],$orderInfo['randstr']);
                if(!$result){
                    $this->error('订单已经生成，但是您的邮箱存在问题导致邮件无法发送，请联系管理员索要后续链接！');
                }
                //发送短信

            }else{
                $this->error('付款成功！但是系统出错，请联系管理员');
            }
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
        echo $pay->success();
    }

    public function paysuccess(){
        return $this->view->fetch();
    }

    /*
     * 生成随机6位字符的订单随机数
     */
    public function GetRandStr()
    {
        $chars = array(
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
            "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",
            "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",
            "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R",
            "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2",
            "3", "4", "5", "6", "7", "8", "9"
        );
        $charsLen = count($chars) - 1;
        shuffle($chars);
        $output = "";
        for ($i=0; $i<6; $i++)
        {
            $output .= $chars[mt_rand(0, $charsLen)];
        }
        return $output;
    }

    /*
     * 发送邮件
     */
    public function send_email($to,$randstr){
        //设置邮件信息，收件人，邮件标题，邮件内容
        $subject = "公证通邮件";
        $message = "请复制该链接在浏览器打开，填写后续的详细信息完成认证。".$this->request->domain()."/index/order/orderwinfo/msg/".$randstr;
        $email = new Email();
        $result = $email->to($to)->subject($subject)->message($message)->send();
        return $result;
    }

    public function test(){
        $notifyurl = $this->request->root(true).'/dingdan/order/notifywx/paytype/'.$type;
        dump($notifyurl);die;
        $orderInfo = $this->model->field('randstr,email')->where('numbering','HBKJ20209221610210127')->find();
        $orderInfo = $orderInfo->toArray();
        $result = $this->send_email($orderInfo['email'],$orderInfo['randstr']);
        if(!$result){
            $this->error('订单已经生成，但是您的邮箱存在问题导致邮件无法发送，请联系管理员索要后续链接！');
        }
//        var_dump($z);die;
    }

}

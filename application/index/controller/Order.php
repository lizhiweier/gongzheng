<?php
namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\validate\OrderForm;
use app\index\validate\OrderUpload;
use think\Db;
use think\exception\PDOException;
use think\exception\ValidateException;
use think\Lang;

class Order extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();

    }

    //微信公众号迁移表单
    public function orderform()
    {
        //获取地址栏订单随机数，判断随机数是否和订单数据表一致
        $randstr = input('msg');
        $orderInfo = $this->orderData($randstr);
        if(!$orderInfo){
            $this->assign('message','您的上传资料链接有误！请联系管理员......');
            return $this->view->fetch('msgerror');
        }
        $orderInfo = $orderInfo->toArray();
        if ($this->request->isPost()) {
            //获取表单数据，根据身份证生成甲方和乙方性别，生日，去掉下标前两位"j_","y_"
            $params1 = $this->request->post("row1/a");
            $params2 = $this->request->post("row2/a");
            if ($params1 && $params2) {
                $token = $this->request->post('__token__');
                //修改下标
                $params1 = $this->changeKeys($params1);
                $params2 = $this->changeKeys($params2);
                //补全数据表数据
                $data1 = [
                    'order_id' => $orderInfo['id'],
                    'gl_id' => $orderInfo['gl_id'],
                    'orginid' => $params1['orginid'],
                    'types' => $params1['types'],
                    'subname' => $params1['subname'],
                    'enterinfo' => $params1['enterinfo'],
                    'realname' => $params1['realname'],
                    'idnumber' => $params1['idnumber'],
                    'sex' => get_sex($params1['idnumber']),
                    'birthday' => get_birthday($params1['idnumber']),
                    'mobile' => $params1['mobile'],
                    'email' => $params1['email'],
                    'address' => $params1['address'],
                    'management' => $params1['management'],
                    'manageid' => $params1['manageid'],
                    'position' => $params1['position'],
                    'createtime' => time(),
                    '__token__' => $token,
                ];
                $data2 = [
                    'order_id' => $orderInfo['id'],
                    'gl_id' => $orderInfo['gl_id'],
                    'orginid' => $params2['orginid'],
                    'types' => $params2['types'],
                    'subname' => $params2['subname'],
                    'enterinfo' => $params2['enterinfo'],
                    'realname' => $params2['realname'],
                    'idnumber' => $params2['idnumber'],
                    'sex' => get_sex($params2['idnumber']),
                    'birthday' => get_birthday($params2['idnumber']),
                    'mobile' => $params2['mobile'],
                    'email' => $params2['email'],
                    'address' => $params2['address'],
                    'management' => $params2['management'],
                    'manageid' => $params2['manageid'],
                    'position' => $params2['position'],
                    'createtime' => time(),
                    '__token__' => $token,
                ];

                //数据验证
                $validate = new OrderForm();
                Lang::load(APP_PATH . $this->request->module() . '/lang/' . $this->request->langset() . '/' . str_replace('.', '/', $this->request->action()) . '.php');
                $result1 = $validate->scene('add')->check($data1);
                $result2 = $validate->scene('add')->check($data2);
                if (!$result1 || !$result2) {
//                    dump($validate->getError());die;
                    $this->error($validate->getError(), null, ['token' => $this->request->token()]);
                    die;
                }
                $result3 = false;
                $result4 = false;
                //实例化甲和乙模型，插入数据
                $modelJia = new \app\admin\model\dingdan\OrderWeiqyJia;
                $modelYi = new \app\admin\model\dingdan\OrderWeiqyYi;
                Db::startTrans();
                try {
                    $result3 = $modelJia->isUpdate(false)->allowField(true)->save($data1);
                    $result4 = $modelYi->isUpdate(false)->allowField(true)->save($data2);
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
                if ($result3 !== false && $result4 !== false) {
//                    dump($data1);dump($data2);die;
                    $orderModel = new \app\admin\model\dingdan\Order();
                    $orderModel->isUpdate(true)->save(['status'=>'2'],['id'=>$orderInfo['id']]);
                    $url = $this->request->root(true).url("/index/order/orderupload/msg/$randstr");
                    $this->success('操作成功！！！！！', $url);
                } else {
                    $this->error(__('No rows were inserted'));
                }
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }

        if($orderInfo['status'] == 1){
            return $this->view->fetch();
        }else{
            $this->checkMsg($orderInfo['status'],$randstr,$orderInfo);
            die;

        }

    }

    //微信公众号资料上传
    public function orderupload(){
        //获取地址栏订单随机数，判断随机数是否和订单数据表一致
        $randstr = input('msg');
        $orderInfo = $this->orderData($randstr);
        if(!$orderInfo){
            $this->assign('message','您的上传资料链接有误！请联系管理员......');
            return $this->view->fetch('msgerror');
        }
        $orderInfo = $orderInfo->toArray();
        if ($this->request->isPost()) {
            //获取表单数据，根据身份证生成甲方和乙方性别，生日，去掉下标前两位"j_","y_"
            $params1 = $this->request->post("row1/a");
            $params2 = $this->request->post("row2/a");
            if ($params1 && $params2) {
                $token = $this->request->post('__token__');
                //修改下标
                $params1 = $this->changeKeys($params1);
                $params2 = $this->changeKeys($params2);
                //补全数据表数据
                $data1 = [
                    'order_id' => $orderInfo['id'],
                    'gl_id' => $orderInfo['gl_id'],
                    'shenzheng' => $params1['shenzheng'],
                    'shenfan' => $params1['shenfan'],
                    'license' => $params1['license'],
                    'screenshots' => $params1['screenshots'],
                    'poweratt' => $params1['poweratt'],
                    'createtime' => time(),
                    '__token__' => $token,
                ];
                $data2 = [
                    'order_id' => $orderInfo['id'],
                    'gl_id' => $orderInfo['gl_id'],
                    'shenzheng' => $params2['shenzheng'],
                    'shenfan' => $params2['shenfan'],
                    'license' => $params2['license'],
                    'screenshots' => $params2['screenshots'],
                    'poweratt' => $params2['poweratt'],
                    'createtime' => time(),
                    '__token__' => $token,
                ];
                //数据验证
                $validate = new OrderUpload();
                Lang::load(APP_PATH . $this->request->module() . '/lang/' . $this->request->langset() . '/' . str_replace('.', '/', $this->request->action()) . '.php');
                $result1 = $validate->scene('add')->check($data1);
                $result2 = $validate->scene('add')->check($data2);
                if (!$result1 || !$result2) {
                    dump($validate->getError());dump($data1);die;
                    $this->error($validate->getError(), null, ['token' => $this->request->token()]);
                    die;
                }
                $result3 = false;
                $result4 = false;
                //实例化甲和乙模型，插入数据
                $modelJia = new \app\admin\model\dingdan\OrderWeiqyJia;
                $modelYi = new \app\admin\model\dingdan\OrderWeiqyYi;
                Db::startTrans();
                try {
                    $result3 = $modelJia->isUpdate(false)->allowField(true)->save($data1);
                    $result4 = $modelYi->isUpdate(false)->allowField(true)->save($data2);
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
                if ($result3 !== false && $result4 !== false) {
//                    dump($data1);dump($data2);die;
                    $orderModel = new \app\admin\model\dingdan\Order();
                    $orderModel->isUpdate(true)->save(['status'=>'2'],['id'=>$orderInfo['id']]);
                    $url = $this->request->root(true).url("/index/order/orderupload/msg/$randstr");
                    $this->success('操作成功！！！！！', $url);
                } else {
                    $this->error(__('No rows were inserted'));
                }
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }
        if($orderInfo['status'] == 2){
            return $this->view->fetch();
        }else{
            $this->checkMsg($orderInfo['status'],$randstr,$orderInfo);
            die;
        }
    }

    //链接错误
    public function msgerror($message){
        $message = input('message');
//        echo $message;die;
        $this->assign('message',$message);
        return $this->view->fetch();
    }

    //订单信息页
    public function orderinfo(){
        $data = input();
        if(empty($data)){
            $this->redirect('msgerror',['message'=>'您的上传资料链接有误！请联系管理员......']);
        }
//        dump($data);die;
        $info = $this->orderData($data['randstr']);
        $info = $info->toArray();
        $name = $this->orderGl($info['gl_id']);
        $this->assign('name',$name['name']);
        $this->assign('info',$info);
        $this->assign('data',$data);

        return $this->view->fetch();
    }

    /*
     * 业务管理表信息
     * $glId    管理表ID
     */
    public function orderGl($glId){
        $orderGlModel = new \app\admin\model\OrderGl();
        $orderGlName = $orderGlModel->field('name')->where(['id'=>$glId])->find();
        $orderGlName = $orderGlName->toArray();
        return $orderGlName;
    }

    /*
     * 判断当前订单参数是否存在
     * $status  订单状态
     * $orderInfo 订单数据
     *
     */
    public function checkMsg($status,$randstr,$orderInfo){
        if($status == 0){
            $this->redirect('msgerror',['message'=>'请联系管理员先付款.....']);
            die;
            /*$data['message'] = '请联系管理员先付款.....';
            $data['url'] = 'msgerror';
            return $data;*/
        }else if($status == 1){
            $this->redirect('orderinfo',['message'=>'上传资料','link'=>'orderform','randstr'=>$randstr]);
            die;
            /*$data['message'] = '上传资料';
            $data['link'] = 'orderform';
            $data['url'] = 'orderinfo';*/
            return $data;
        }else if($status == 2){
            $this->redirect('orderinfo',['message'=>'上传资料','link'=>'orderupload','randstr'=>$randstr]);
            die;
            /*$data['message'] = '上传资料';
            $data['link'] = 'orderupload';
            $data['url'] = 'orderinfo';
            return $data;*/
        }else if($status == 3){
            $this->redirect('msgerror',['message'=>'正在审核材料，请稍后再试.....']);
            die;
            /*$data['message'] = '正在审核材料，请稍后再试.....';
            $data['url'] = 'msgerror';
            return $data;*/
        }else if($status == 4){
            $this->redirect('msgerror',['message'=>'该订单已完成.....']);
            die;
            /*$data['message'] = '该订单已完成.....';
            $data['url'] = 'msgerror';
            return $data;*/
        }else{
            $this->redirect('msgerror',['message'=>'您的上传资料链接有误！请联系管理员......']);
            die;
        }
    }

    /*
     * 验证订单随机数
     * 取出订单数据
     */
    public function orderData($randstr){
        $orderModel = new \app\admin\model\dingdan\Order();
        $orderInfo = $orderModel->field('id,status,numbering,createtime,gl_id')->where(['randstr'=>$randstr])->find();
        return $orderInfo;
    }

    public function changeKeys($info){
        $formInfo = array();
        foreach($info as $k=>$v){
            $k1 = substr($k,2);
            $formInfo[$k1] = $v;
        }
        return $formInfo;
    }


}
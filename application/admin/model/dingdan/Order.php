<?php

namespace app\admin\model\dingdan;

use think\Model;
use traits\model\SoftDelete;

class Order extends Model
{

    use SoftDelete;

    

    // 表名
    protected $name = 'order';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    protected $deleteTime = 'deletetime';

    // 追加属性
    protected $append = [
        'is_ertification_text',
        'pay_method_text',
        'status_text'
    ];
    

    
    public function getIsErtificationList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getPayMethodList()
    {
        return ['wechat' => __('Wechat'), 'alipay' => __('Alipay')];
    }

    public function getStatusList()
    {
        return ['0' => __('Status 0'), '1' => __('Status 1'), '2' => __('Status 2'), '3' => __('Status 3'), '4' => __('Status 4')];
    }


    public function getIsErtificationTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['is_ertification']) ? $data['is_ertification'] : '');
        $list = $this->getIsErtificationList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getPayMethodTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['pay_method']) ? $data['pay_method'] : '');
        $list = $this->getPayMethodList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }




    public function ordergl()
    {
        return $this->belongsTo('app\admin\model\OrderGl', 'gl_id', 'Id', [], 'LEFT')->setEagerlyType(0);
    }
}

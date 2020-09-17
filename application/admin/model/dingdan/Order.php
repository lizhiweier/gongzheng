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
        'source_text',
        'status_text'
    ];
    

    
    public function getIsErtificationList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getSourceList()
    {
        return ['个人' => __('个人'), '企业' => __('企业'), '个体' => __('个体')];
    }

    public function getStatusList()
    {
        return ['0' => __('Status 0'), '1' => __('Status 1'), '2' => __('Status 2')];
    }


    public function getIsErtificationTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['is_ertification']) ? $data['is_ertification'] : '');
        $list = $this->getIsErtificationList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getSourceTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['source']) ? $data['source'] : '');
        $list = $this->getSourceList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}

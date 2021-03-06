<?php

namespace app\admin\model;

use think\Model;


class OrderGl extends Model
{

    

    

    // 表名
    protected $name = 'order_gl';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];
    

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    







    public function ordercat()
    {
        return $this->belongsTo('OrderCat', 'category_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}

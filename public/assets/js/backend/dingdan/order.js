define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'dingdan/order/index' + location.search,
                    add_url: 'dingdan/order/add',
                    edit_url: 'dingdan/order/edit',
                    del_url: 'dingdan/order/del',
                    multi_url: 'dingdan/order/multi',
                    table: 'order',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'numbering', title: __('Numbering')},
                        {field: 'ordergl.name', title: __('Ordergl.name')},
                        {field: 'notary', title: __('Notary')},
                        {field: 'cont_name', title: __('Cont_name')},
                        {field: 'mobile', title: __('Mobile')},
                        {field: 'remark', title: __('Remark')},
                        {field: 'channel', title: __('Channel')},
                        {field: 'price', title: __('Price'), operate:'BETWEEN'},
                        {field: 'pay_method', title: __('Pay_method'), searchList: {"wechat":__('Wechat'),"alipay":__('Alipay')}, formatter: Table.api.formatter.normal},
                        {field: 'status', title: __('Status'), searchList: {"0":__('Status 0'),"1":__('Status 1'),"2":__('Status 2'),"3":__('Status 3'),"4":__('Status 4')}, formatter: Table.api.formatter.status},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, buttons: [
                                {
                                    name: 'detail', text: '订单详情', title: '订单详情', icon: 'fa  fa-list', classname: 'btn btn-xs btn-default btn-ajax btn-detail', url: 'dingdan/order/orderInfo/'+{field: 'id'}, refresh: true,
                                    hidden:function(row){
                                        if(row.status == 0){
                                            return true;
                                        }else if(row.status == 1){
                                            return false;
                                        }else if(row.status == 2){
                                            return false;
                                        }else if(row.status == 3){
                                            return false;
                                        }else if(row.status == 4){
                                            return false;
                                        }
                                    }
                                },
                                {
                                    name: 'pay', text: '继续付款', title: '继续付款', icon: 'fa fa-share', classname: 'btn btn-xs btn-default btn-ajax btn-pay', url: 'dingdan/order/listcontpay/'+{field: 'id'}, refresh: true,
                                    hidden:function(row){
                                        if(row.status == 0){
                                            return false;
                                        }else if(row.status == 1){
                                            return true;
                                        }else if(row.status == 2){
                                            return true;
                                        }else if(row.status == 3){
                                            return true;
                                        }else if(row.status == 4){
                                            return true;
                                        }
                                    }
                                }
                            ],
                            events: Table.api.events.operate, formatter: Table.api.formatter.operate
                        }
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        recyclebin: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    'dragsort_url': ''
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: 'dingdan/order/recyclebin' + location.search,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {
                            field: 'deletetime',
                            title: __('Deletetime'),
                            operate: 'RANGE',
                            addclass: 'datetimerange',
                            formatter: Table.api.formatter.datetime
                        },
                        {
                            field: 'operate',
                            width: '130px',
                            title: __('Operate'),
                            table: table,
                            events: Table.api.events.operate,
                            buttons: [
                                {
                                    name: 'Restore',
                                    text: __('Restore'),
                                    classname: 'btn btn-xs btn-info btn-ajax btn-restoreit',
                                    icon: 'fa fa-rotate-left',
                                    url: 'dingdan/order/restore',
                                    refresh: true
                                },
                                {
                                    name: 'Destroy',
                                    text: __('Destroy'),
                                    classname: 'btn btn-xs btn-danger btn-ajax btn-destroyit',
                                    icon: 'fa fa-times',
                                    url: 'dingdan/order/destroy',
                                    refresh: true
                                }
                            ],
                            formatter: Table.api.formatter.operate
                        }
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});
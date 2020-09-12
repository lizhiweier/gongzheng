define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'guanli/index' + location.search,
                    add_url: 'guanli/add',
                    edit_url: 'guanli/edit',
                    del_url: 'guanli/del',
                    multi_url: 'guanli/multi',
                    table: 'order_gl',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'Id',
                sortName: 'weigh',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'Id', title: __('Id')},
                        {field: 'category_id', title: __('Category_id')},
                        {field: 'name', title: __('Name')},
                        {field: 'gzimage', title: __('Gzimage'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'price', title: __('Price'), operate:'BETWEEN'},
                        {field: 'weigh', title: __('Weigh')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'ordercat.name', title: __('Ordercat.name')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
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
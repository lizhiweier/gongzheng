define(['jquery', 'bootstrap', 'frontend', 'form'], function ($, undefined, Frontend, Form) {
    var Controller = {
        orderform: function () {
            Controller.api.bindevent();
            //点击+上传文件
            /*$(document).on("click", ".uploadBtn", function () {
                $('.ivu-upload-input').click();
            });*/
        },
        orderupload: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
                // Form.events.plupload($("form[role=form]"));
            }
        }
    };
    return Controller;
});
define(['jquery', 'bootstrap', 'frontend', 'form'], function ($, undefined, Frontend, Form) {
/*    var validatoroptions = {
        invalid: function (form, errors) {
            $.each(errors, function (i, j) {
                Layer.msg(j);
            });
        }
    };*/
    var Controller = {
        orderform: function () {
            //本地验证未通过时提示
            // $("#winfo-form").data("validator-options", validatoroptions);
            Form.api.bindevent($("#winfo-form"), function (data, ret) {
                setTimeout(function () {
                    location.href = ret.url ? ret.url : "/";
                }, 1000);
            });

        },
        orderupload: function () {
            Form.api.bindevent($("#wupload-form"), function (data, ret) {
                setTimeout(function () {
                    location.href = ret.url ? ret.url : "/";
                }, 1000);
            });
        }
    };
    return Controller;
});
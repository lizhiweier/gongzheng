<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"J:\code\gongzheng\public/../application/index\view\order\orderwinfo.html";i:1600769592;s:59:"J:\code\gongzheng\application\index\view\common\script.html";i:1588765311;}*/ ?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>微信迁移公证详细信息填写</title>
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/orderinfo.css" rel="stylesheet">



    <!-- Plugin CSS -->
    <link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.staticfile.org/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var require = {
            config: <?php echo json_encode($config); ?>
        };
    </script>
</head>

<body id="page-top">

    <div id="app">
        <div class="container userContent">
            <header>
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <h1><?php echo $site['name']; ?></h1>
                        </div>
                        <div class="col-xs-12 col-sm-3" style="margin-top: 20px;">
                            有问题请联系： <?php echo $site['phone']; ?>
                        </div>
                    </div>
            </header>
            <div class="content">
                <div class="panel-body">
                    <div class="row">
                        <form id="winfo-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
                            <h4><i></i>联系人信息填写</h4>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 is-required">公众号原始ID：</label>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="c-name" data-rule="required" class="form-control" name="row[cont_name]" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 is-required redio-inline">申请主体类型：</label>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="checkbox-inline">
                                        <input id="c-pay_method" data-rule="" name="row[pay_method]" type="radio" value="" >&nbsp;个人&nbsp;
                                    </label>
                                    <label class="checkbox-inline">
                                        <input id="c-pay_method" data-rule="" name="row[pay_method]" type="radio" value="" checked>&nbsp;企业&nbsp;
                                    </label>
                                    <label class="checkbox-inline">
                                        <input id="c-pay_method" data-rule="" name="row[pay_method]" type="radio" value="" >&nbsp;个体&nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 is-required">申请主体名称：</label>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="c-email" data-rule="required;email" class="form-control" name="row[email]" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 is-required">企业个人信息：</label>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="c-email" data-rule="required;email" class="form-control" name="row[email]" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 is-required">姓名：</label>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="c-email" data-rule="required;email" class="form-control" name="row[email]" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 is-required">证件号码：</label>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="c-email" data-rule="required;email" class="form-control" name="row[email]" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 is-required redio-inline">性别：</label>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="checkbox-inline">
                                        <input id="c-pay_method" data-rule="" name="row[pay_method]" type="radio" value="" checked>&nbsp;男
                                    </label>
                                    <label class="checkbox-inline">
                                        <input id="c-pay_method" data-rule="" name="row[pay_method]" type="radio" value="" >&nbsp;女&nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="xian">
                                <h4><i></i>联系人信息填写</h4>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-1">邮寄地址:</label>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="c-address" data-rule="length(0~50)" class="form-control" name="row[address]" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-1">订单备注:</label>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="c-remark" data-rule="length(0~50)" class="form-control" name="row[remark]" type="text" value="">
                                </div>
                            </div>


                            <div class="form-group layer-footer">
                                <label class="control-label col-xs-12 col-sm-3"></label>
                                <div class="col-xs-12 col-sm-3">
                                    <button type="submit" class="btn btn-primary btn-embossed">下一步</button>
                                    <!--                        <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>-->
                                </div>
                                <!--                    <label class="control-label col-xs-12 col-sm-6"></label>-->
                                <!--                    <div class="col-xs-12 col-sm-5">-->
                                <!--                        <button type="button" class="btn btn-primary" onclick="getnext('step2')">下一步</button>-->
                                <!--                    </div>-->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery -->
<script src="https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
</body>

</html>

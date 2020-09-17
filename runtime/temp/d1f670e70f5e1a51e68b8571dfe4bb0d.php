<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"J:\code\gongzheng\public/../application/admin\view\dingdan\order\certi_info.html";i:1600353035;s:60:"J:\code\gongzheng\application\admin\view\layout\default.html";i:1588765311;s:57:"J:\code\gongzheng\application\admin\view\common\meta.html";i:1588765311;s:59:"J:\code\gongzheng\application\admin\view\common\script.html";i:1588765311;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <style>
    #step1{
        display:block;
    }

    #step2{
        display:none;
    }

    .panel-body{
        color: #515a6e;
        background-color:#fff;
    }

    .panel-body h4{
        margin-bottom: 25px;
    }

    .panel-body h4 i{
        background: #cb3246;
        display: inline-block;
        height: 15px;
        margin-right: 6px;
        position: relative;
        top: 2px;
        width: 2px;
    }

    .panel-body .row .form-group .is-required::before{
        color: #f56c6c;
        content: "*";
        margin-right: 4px;
    }
    .panel-body .row .layer-footer{
        border-top: 1px solid #CCCCCC;
        padding-top:20px;
        margin-left: 0px;
        margin-right: 0px;
    }

    .form-group{
        padding-bottom: 20px;
    }
</style>
<div id="step1" class="panel-body">
    <h4>
        <i class="soild"></i>
        联系人信息填写
    </h4>
    <div class="row">
        <div>
            <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4 is-required">联系人姓名:</label>
                    <div class="col-xs-12 col-sm-5">
                        <input id="c-name" data-rule="required" class="form-control" name="row[name]" type="text" value="<?php echo htmlentities($admininfo['realname']); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4 is-required">手机号码:</label>
                    <div class="col-xs-12 col-sm-5">
                        <input id="c-mobile" data-rule="required" class="form-control" name="row[mobile]" type="text" value="<?php echo htmlentities($admininfo['phone']); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4 is-required">电子邮箱:</label>
                    <div class="col-xs-12 col-sm-5">
                        <input id="c-email" data-rule="required" class="form-control" name="row[email]" type="text" value="<?php echo htmlentities($admininfo['email']); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4">邮寄地址:</label>
                    <div class="col-xs-12 col-sm-5">
                        <input id="c-address" data-rule="required" class="form-control" name="row[address]" type="text" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4">订单备注:</label>
                    <div class="col-xs-12 col-sm-5">
                        <input id="c-remark" data-rule="required" class="form-control" name="row[remark]" type="text" value="">
                    </div>
                </div>
                <div class="form-group layer-footer">
                    <!--<label class="control-label col-xs-12 col-sm-6"></label>
                    <div class="col-xs-12 col-sm-5">
                        <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
                        <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                    </div>-->
                </div>
            </form>
            <button type="button" class="btn btn-success" onclick="getnext('step2')">下一步</button>
        </div>
    </div>
</div>
<div id="step2" class="panel-body" style="height: 500px;border:1px solid #ccc">
    <h4>
        <i class="soild"></i>
        请选择付款方式
    </h4>
    <button type="button" class="btn btn-primary" onclick="getnext('step1')">上一步</button>
</div>
<script>
    //下一步上一步js逻辑
    function getnext(i) {
        alert(i);
        var sz = new Array("step1", "step2");
        for (var j = 0; j < sz.length; j++) {
            if (i == sz[j]) {
                document.getElementById(i).style.display = "block";
            } else {
                document.getElementById(sz[j]).style.display = "none";
            }
        }
    }

</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
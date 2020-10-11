<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"G:\code\gongzheng\public/../application/admin\view\dingdan\order\edit.html";i:1602315609;s:60:"G:\code\gongzheng\application\admin\view\layout\default.html";i:1588765311;s:57:"G:\code\gongzheng\application\admin\view\common\meta.html";i:1588765311;s:59:"G:\code\gongzheng\application\admin\view\common\script.html";i:1588765311;}*/ ?>
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
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Numbering'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-numbering" data-rule="required" class="form-control" name="row[numbering]" type="text" value="<?php echo htmlentities($row['numbering']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Gl_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-gl_id" data-rule="required" data-source="gl/index" class="form-control selectpage" name="row[gl_id]" type="text" value="<?php echo htmlentities($row['gl_id']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Notary'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-notary" data-rule="required" class="form-control" name="row[notary]" type="text" value="<?php echo htmlentities($row['notary']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Is_ertification'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-is_ertification" data-rule="required" class="form-control selectpicker" name="row[is_ertification]">
                <?php if(is_array($isErtificationList) || $isErtificationList instanceof \think\Collection || $isErtificationList instanceof \think\Paginator): if( count($isErtificationList)==0 ) : echo "" ;else: foreach($isErtificationList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['is_ertification'])?$row['is_ertification']:explode(',',$row['is_ertification']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Cont_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-cont_name" data-rule="required" class="form-control" name="row[cont_name]" type="text" value="<?php echo htmlentities($row['cont_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Mobile'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-mobile" data-rule="required" class="form-control" name="row[mobile]" type="text" value="<?php echo htmlentities($row['mobile']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Email'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-email" data-rule="required" class="form-control" name="row[email]" type="text" value="<?php echo htmlentities($row['email']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Address'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-address" data-rule="required" class="form-control" name="row[address]" type="text" value="<?php echo htmlentities($row['address']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Remark'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-remark" data-rule="required" class="form-control" name="row[remark]" type="text" value="<?php echo htmlentities($row['remark']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Channel'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-channel" data-rule="required" class="form-control" name="row[channel]" type="text" value="<?php echo htmlentities($row['channel']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Price'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-price" data-rule="required" class="form-control" step="0.01" name="row[price]" type="number" value="<?php echo htmlentities($row['price']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Pay_method'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-pay_method" class="form-control selectpicker" name="row[pay_method]">
                <?php if(is_array($payMethodList) || $payMethodList instanceof \think\Collection || $payMethodList instanceof \think\Paginator): if( count($payMethodList)==0 ) : echo "" ;else: foreach($payMethodList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['pay_method'])?$row['pay_method']:explode(',',$row['pay_method']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($statusList) || $statusList instanceof \think\Collection || $statusList instanceof \think\Paginator): if( count($statusList)==0 ) : echo "" ;else: foreach($statusList as $key=>$vo): ?>
            <label for="row[status]-<?php echo $key; ?>"><input id="row[status]-<?php echo $key; ?>" name="row[status]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['status'])?$row['status']:explode(',',$row['status']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Randstr'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-randstr" data-rule="required" class="form-control" name="row[randstr]" type="text" value="<?php echo htmlentities($row['randstr']); ?>">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
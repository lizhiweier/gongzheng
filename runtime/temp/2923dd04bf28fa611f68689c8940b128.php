<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"I:\code\gongzheng\public/../application/index\view\order\orderupload.html";i:1602152793;s:59:"I:\code\gongzheng\application\index\view\common\script.html";i:1588765311;}*/ ?>
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
    <!--    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="/assets/css/orderform.css" rel="stylesheet">



    <!-- Plugin CSS -->
    <!--    <link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">-->
    <!--    <link href="https://cdn.staticfile.org/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">-->

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
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-xs-12 col-sm-9">
                    <h1><?php echo $site['name']; ?></h1>
                </div>
                <div class="col-xs-12 col-sm-3" style="margin-top: 20px;">
                    有问题请联系： <?php echo $site['phone']; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h4 style="margin-bottom: 20px;"><i></i>注意事项：</h4>
                    <p>1、请填写原微信公众号主体（甲方）信息、目标微信公众号主体（乙方）信息</p>
                    <p>2、请将材料图片1：1扫描成彩色图片格式后逐个上传</p>
                    <p>3、上传公证材料,支持图片、pdf格式</p>
                </div>
            </div>
        </header>
        <div class="content">
            <!--                <div class="row">-->
            <form name="form" id="wupload-form" role="form" class="form-horizontal" data-toggle="validator" method="POST" action="">
                <?php echo token(); ?>
                <!--上传资料甲方-->
                <div class="panel-body">
                    <h4><i></i>上传公证材料（甲方）</h4>
                    <!--<div class="form-group">
&lt;!&ndash;                                        <label for="c-image" class="control-label col-xs-12 col-sm-2"><?php echo __('Image'); ?>:</label>&ndash;&gt;
                        <div class="col-xs-12 col-sm-9 upfiles fileStyle" style="position: relative;">
                            <div class="input-group uploadMsg">
                                <h5 style="margin: 5px 0px;"></h5>
                                <div class="upladBtn">
                                    <div class="ivu-upload" style="display: inline-block; width: 100px;">
                                        <div class="ivu-upload ivu-upload-drag">
                                            <input id="c-shen_zheng" class="form-control h-text" size="35" name="row3[shen_zheng]" type="text" value="" data-url="upload">
                                            <div class="a">
                                <div class="input-group-addon no-border no-padding">
&lt;!&ndash;                                                    <span>&ndash;&gt;
                                        <button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-shen_zheng" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-image">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                        </button>
                                        <div style="display: block;text-align: center;">
                                        <span style="font-size: 12px;">上传</span>
                                        <span style="font-size: 12px;">身份证正面</span>
                                        </div>
&lt;!&ndash;                                                    </span>&ndash;&gt;
                                </div>
                                            </div>
                                <span class="msg-box n-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-image"></ul>
                        </div>
                        <div class="upfiles fileStyle" style="position: relative;">
                            <div class="uploadMsg">
                                <h5 style="margin: 5px 0px;"></h5>
                                <div class="upladBtn">
                                    <div class="ivu-upload" style="display: inline-block; width: 100px;">
                                        <div class="ivu-upload ivu-upload-drag">
                                            <input id="c-image" type="file" name="row[image]" class="ivu-upload-input" data-url="upload">
                                            <div class="uploadBtn">
                                                <button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-image">
                                                <i class="ivu-icon ivu-icon-ios-add" style="font-size: 30px;"></i>
                                                </button>
                                                <span style="font-size: 12px;">上传</span>
                                                <span style="font-size: 12px;">身份证正面</span>
                                            </div>
                                        </div>
                                        <ul class="row ivu-upload-list plupload-preview" id="p-image"></ul>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>-->
                    <!--                                    身份证正面-->
                    <div class="form-group form-group-lg">
                        <label for="c-j_shenzheng" class="control-label col-xs-12 col-sm-2">身份证正面：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-j_shenzheng" data-rule="required" class="form-control" size="50" name="row1[j_shenzheng]" type="text" value="" placeholder="请上传身份证正面图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-j_shenzheng" class="btn btn-danger plupload" data-input-id="c-j_shenzheng" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-j_shenzheng">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-j_shenzheng"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-j_shenzheng"></ul>
                        </div>
                    </div>

                    <!--身份证反面-->
                    <div class="form-group form-group-lg">
                        <label for="c-j_shenfan" class="control-label col-xs-12 col-sm-2">身份证反面：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-j_shenfan" data-rule="required" class="form-control" size="50" name="row1[j_shenfan]" type="text" value="" placeholder="请上传身份证反面图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-j_shenfan" class="btn btn-danger plupload" data-input-id="c-j_shenfan" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-j_shenfan">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-j_shenfan"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-j_shenfan"></ul>
                        </div>
                    </div>

                    <!--营业执照-->
                    <div class="form-group form-group-lg">
                        <label for="c-j_license" class="control-label col-xs-12 col-sm-2">营业执照：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-j_license" data-rule="required" class="form-control" size="50" name="row1[j_license]" type="text" value="" placeholder="请上传营业执照图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-j_license" class="btn btn-danger plupload" data-input-id="c-j_license" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-j_license">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-j_license"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-j_license"></ul>
                        </div>
                    </div>

                    <!--微信公众号截图-->
                    <div class="form-group form-group-lg">
                        <label for="c-j_screenshots" class="control-label col-xs-12 col-sm-2">微信公众号截图：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-j_screenshots" data-rule="required" class="form-control" size="50" name="row1[j_screenshots]" type="text" value="" placeholder="请上传微信公众号截图，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-j_screenshots" class="btn btn-danger plupload" data-input-id="c-j_screenshots" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-j_screenshots">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-j_screenshots"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-j_screenshots"></ul>
                        </div>
                    </div>

                    <!--授权委托书-->
                    <div class="form-group form-group-lg">
                        <label for="c-j_poweratt" class="control-label col-xs-12 col-sm-2">授权委托书：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-j_poweratt" data-rule="required" class="form-control" size="50" name="row1[j_poweratt]" type="text" value="" placeholder="请上传授权委托书图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-j_poweratt" class="btn btn-danger plupload" data-input-id="c-j_poweratt" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-j_poweratt">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-j_poweratt"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-j_poweratt"></ul>
                        </div>
                    </div>
                    <!--<div class="form-group layer-footer">
                        <label class="control-label col-xs-12 col-sm-5"></label>
                        <div class="col-xs-12 col-sm-3">
                            <button type="button" class="btn btn-up btn-primary" onclick="getnext('step2')" style="margin-right: 20px;">上一步</button>
                            <button type="submit" class="btn btn-next btn-primary" onclick="getnext('step4')">下一步</button>
                        </div>
                    </div>-->

                </div>

                <!--上传资料乙方-->
                <div class="panel-body">
                    <h4><i></i>上传公证材料（乙方）</h4>
                    <!--<div class="form-group">
&lt;!&ndash;                                        <label for="c-image" class="control-label col-xs-12 col-sm-2"><?php echo __('Image'); ?>:</label>&ndash;&gt;
                        <div class="col-xs-12 col-sm-9 upfiles fileStyle" style="position: relative;">
                            <div class="input-group uploadMsg">
                                <h5 style="margin: 5px 0px;"></h5>
                                <div class="upladBtn">
                                    <div class="ivu-upload" style="display: inline-block; width: 100px;">
                                        <div class="ivu-upload ivu-upload-drag">
                                            <input id="c-shen_zheng" class="form-control h-text" size="35" name="row3[shen_zheng]" type="text" value="" data-url="upload">
                                            <div class="a">
                                <div class="input-group-addon no-border no-padding">
&lt;!&ndash;                                                    <span>&ndash;&gt;
                                        <button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-shen_zheng" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-image">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                        </button>
                                        <div style="display: block;text-align: center;">
                                        <span style="font-size: 12px;">上传</span>
                                        <span style="font-size: 12px;">身份证正面</span>
                                        </div>
&lt;!&ndash;                                                    </span>&ndash;&gt;
                                </div>
                                            </div>
                                <span class="msg-box n-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-image"></ul>
                        </div>
                        <div class="upfiles fileStyle" style="position: relative;">
                            <div class="uploadMsg">
                                <h5 style="margin: 5px 0px;"></h5>
                                <div class="upladBtn">
                                    <div class="ivu-upload" style="display: inline-block; width: 100px;">
                                        <div class="ivu-upload ivu-upload-drag">
                                            <input id="c-image" type="file" name="row[image]" class="ivu-upload-input" data-url="upload">
                                            <div class="uploadBtn">
                                                <button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-image">
                                                <i class="ivu-icon ivu-icon-ios-add" style="font-size: 30px;"></i>
                                                </button>
                                                <span style="font-size: 12px;">上传</span>
                                                <span style="font-size: 12px;">身份证正面</span>
                                            </div>
                                        </div>
                                        <ul class="row ivu-upload-list plupload-preview" id="p-image"></ul>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>-->
                    <!--身份证正面-->
                    <div class="form-group form-group-lg">
                        <label for="c-y_shenzheng" class="control-label col-xs-12 col-sm-2">身份证正面：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-y_shenzheng" data-rule="required" class="form-control" size="50" name="row2[y_shenzheng]" type="text" value="" placeholder="请上传身份证正面图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-y_shenzheng" class="btn btn-danger plupload" data-input-id="c-y_shenzheng" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-y_shenzheng">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-y_shenzheng"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-y_shenzheng"></ul>
                        </div>
                    </div>

                    <!--身份证反面-->
                    <div class="form-group form-group-lg">
                        <label for="c-y_shenfan" class="control-label col-xs-12 col-sm-2">身份证反面：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-y_shenfan" data-rule="required" class="form-control" size="50" name="row2[y_shenfan]" type="text" value="" placeholder="请上传身份证反面图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-y_shenfan" class="btn btn-danger plupload" data-input-id="c-y_shenfan" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-y_shenfan">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-y_shenfan"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-y_shenfan"></ul>
                        </div>
                    </div>

                    <!--营业执照-->
                    <div class="form-group form-group-lg">
                        <label for="c-y_license" class="control-label col-xs-12 col-sm-2">营业执照：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-y_license" data-rule="required" class="form-control" size="50" name="row2[y_license]" type="text" value="" placeholder="请上传营业执照图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-y_license" class="btn btn-danger plupload" data-input-id="c-y_license" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-y_license">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-y_license"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-y_license"></ul>
                        </div>
                    </div>

                    <!--微信公众号截图-->
                    <div class="form-group form-group-lg">
                        <label for="c-y_screenshots" class="control-label col-xs-12 col-sm-2">微信公众号截图：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-y_screenshots" data-rule="required" class="form-control" size="50" name="row2[y_screenshots]" type="text" value="" placeholder="请上传微信公众号截图图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-y_screenshots" class="btn btn-danger plupload" data-input-id="c-y_screenshots" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M"  data-preview-id="p-y_screenshots">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-y_screenshots"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-y_screenshots"></ul>
                        </div>
                    </div>

                    <!--授权委托书-->
                    <div class="form-group form-group-lg">
                        <label for="c-y_poweratt" class="control-label col-xs-12 col-sm-2">授权委托书：</label>
                        <div class="col-xs-12 col-sm-8">
                            <div class="input-group">
                                <input id="c-y_poweratt" data-rule="required" class="form-control" size="50" name="row2[y_poweratt]" type="text" value="" placeholder="请上传授权委托书图片，图片后缀必须是gif,jpeg,png,jpg">
                                <div class="input-group-addon no-border no-padding">
                                    <span>
                                        <button type="button" id="plupload-y_poweratt" class="btn btn-danger plupload" data-input-id="c-y_poweratt" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-maxsize="1024M" data-preview-id="p-y_poweratt">
                                            <i class="fa fa-upload"></i> 上传
                                        </button>
                                    </span>
                                </div>
                                <span class="msg-box n-right" for="c-y_poweratt"></span>
                            </div>
                            <ul class="row list-inline plupload-preview" id="p-y_poweratt"></ul>
                        </div>
                    </div>
                    <div class="form-group layer-footer">
                        <label class="control-label col-xs-12 col-sm-5"></label>
                        <div class="col-xs-12 col-sm-3">
                            <!--                                        <button type="button" class="btn btn-up btn-primary" onclick="getnext('step3')" style="margin-right: 20px;">上一步</button>-->
                            <button type="submit" class="btn btn-next btn-primary">确认提交</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<!--<script src="https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>-->

<!-- Bootstrap Core JavaScript -->
<!--<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
</body>

</html>

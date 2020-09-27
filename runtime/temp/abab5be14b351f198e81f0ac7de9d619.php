<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"J:\code\gongzheng\public/../application/index\view\order\orderwinfo.html";i:1601095169;s:59:"J:\code\gongzheng\application\index\view\common\script.html";i:1588765311;}*/ ?>
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
    <link href="/assets/css/orderinfo.css" rel="stylesheet">



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
                    <form name="form" id="winfo-form" role="form" class="form-horizontal" data-toggle="validator" method="POST" action="">
                        <?php echo token(); ?>
                        <!--甲方信息-->
                        <div class="panel-body">
                            <h4><i></i>甲方（原主体），企业填写法人信息，个人填写个人信息</h4>
                            <div class="form-group form-group-lg">
                                <label for="c-j_orginid" class="control-label col-xs-12 col-sm-2 is-required  control-label">公众号原始ID：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_orginid" data-rule="required" class="form-control input-lg" name="row1[j_orginid]" type="text" value="" placeholder="请输入公众号原始ID">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_types" class="control-label col-xs-12 col-sm-2 is-required control-label">申请主体类型：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <label class="checkbox-inline">
                                        <input id="c-j_types" data-rule="" name="row1[j_types]" type="radio" value="个人" >&nbsp;个人&nbsp;
                                    </label>
                                    <label class="checkbox-inline">
                                        <input id="c-j_types" data-rule="" name="row1[j_types]" type="radio" value="企业" checked>&nbsp;企业&nbsp;
                                    </label>
                                    <label class="checkbox-inline">
                                        <input id="c-j_types" data-rule="" name="row1[j_types]" type="radio" value="个体" >&nbsp;个体&nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_subname" class="control-label col-xs-12 col-sm-2 is-required control-label">申请主体名称：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_subname" data-rule="required" class="form-control input-lg" name="row1[j_subname]" type="text" value="" placeholder="请输入公司名称/个人填写个人姓名">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_enterinfo" class="control-label col-xs-12 col-sm-2 is-required control-label">企业/个人信息：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_enterinfo" data-rule="required" class="form-control input-lg" name="row1[j_enterinfo]" type="text" value="" placeholder="请输入统一社会信用代码/营业执照注册号/个人填身份证号">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_realname" class="control-label col-xs-12 col-sm-2 is-required control-label">姓名：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_realname" data-rule="required" class="form-control input-lg" name="row1[j_realname]" type="text" value="" placeholder="请输入法人/个人姓名">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_idnumber" class="control-label col-xs-12 col-sm-2 is-required control-label">证件号码：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_idnumber" data-rule="required;IDcard" class="form-control input-lg" name="row1[j_idnumber]" type="text" value="" placeholder="请输入身份证号码">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_sex" class="control-label col-xs-12 col-sm-2 is-required control-label">性别：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <label class="checkbox-inline">
                                        <input id="c-j_sex" data-rule="" name="row1[j_sex]" type="radio" value="男" checked>&nbsp;男
                                    </label>
                                    <label class="checkbox-inline">
                                        <input id="c-j_sex" data-rule="" name="row1[j_sex]" type="radio" value="女" >&nbsp;女&nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_birthday" class="control-label col-xs-12 col-sm-2 is-required control-label">出生日期：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_birthday" data-date-format="YYYY-MM-DD" data-rule="required" class="form-control datetimepicker input-lg" name="row1[j_birthday]" type="datetime" value="" placeholder="请输入出生日期，格式为yyyy-mm-dd">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_mobile" class="control-label col-xs-12 col-sm-2 is-required control-label">手机号码：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_mobile" data-rule="required;mobile" class="form-control input-lg" name="row1[j_mobile]" type="text" value="" placeholder="请输入手机号码">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_email" class="control-label col-xs-12 col-sm-2 is-required control-label">邮箱号：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_email" data-rule="required;email" class="form-control input-lg" name="row1[j_email]" type="text" value="" placeholder="请输入邮箱号">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_address" class="control-label col-xs-12 col-sm-2 is-required control-label">联系地址：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_address" data-rule="required" class="form-control input-lg" name="row1[j_address]" type="text" value="" placeholder="请输入联系地址">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_management" class="control-label col-xs-12 col-sm-2 is-required control-label">账号管理员：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_management" data-rule="required" class="form-control input-lg" name="row1[j_management]" type="text" value="" placeholder="请输入扫码管理员姓名">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_manageid" class="control-label col-xs-12 col-sm-2 is-required control-label">管理员身份证：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_manageid" data-rule="required;IDcard" class="form-control input-lg" name="row1[j_manageid]" type="text" value="" placeholder="请输入扫码管理员身份证号">
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="c-j_position" class="control-label col-xs-12 col-sm-2 control-label">部门与职位：</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input id="c-j_position" data-rule="" class="form-control input-lg" name="row1[j_position]" type="text" value="" placeholder="请输入部门与职位(选填)">
                                </div>
                            </div>
                            <!--<div class="form-group layer-footer">
                                <label class="control-label col-xs-12 col-sm-5"></label>
                                <div class="col-xs-12 col-sm-3">
                                    <button type="submit" class="btn btn-next btn-primary" onclick="getnext('step2')">下一步</button>
                                </div>
                            </div>-->
                        </div>
                            <!--乙方信息-->
                        <div class="panel-body">
                                <h4><i></i>乙方（目标主体），企业填写法人信息，个人填写个人信息</h4>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_orginid" class="control-label col-xs-12 col-sm-2 is-required  control-label">公众号原始ID：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_orginid" data-rule="required" class="form-control input-lg" name="row2[y_orginid]" type="text" value="" placeholder="请输入公众号原始ID">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_types" class="control-label col-xs-12 col-sm-2 is-required control-label">申请主体类型：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="checkbox-inline">
                                            <input id="c-y_types" data-rule="" name="row2[y_types]" type="radio" value="个人" >&nbsp;个人&nbsp;
                                        </label>
                                        <label class="checkbox-inline">
                                            <input id="c-y_types" data-rule="" name="row2[y_types]" type="radio" value="企业" checked>&nbsp;企业&nbsp;
                                        </label>
                                        <label class="checkbox-inline">
                                            <input id="c-y_types" data-rule="" name="row2[y_types]" type="radio" value="个体" >&nbsp;个体&nbsp;
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_subname" class="control-label col-xs-12 col-sm-2 is-required control-label">申请主体名称：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_subname" data-rule="required" class="form-control input-lg" name="row2[y_subname]" type="text" value="" placeholder="请输入公司名称/个人填写个人姓名">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_enterinfo" class="control-label col-xs-12 col-sm-2 is-required control-label">企业/个人信息：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_enterinfo" data-rule="required" class="form-control input-lg" name="row2[y_enterinfo]" type="text" value="" placeholder="请输入统一社会信用代码/营业执照注册号/个人填身份证号">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_realname" class="control-label col-xs-12 col-sm-2 is-required control-label">姓名：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_realname" data-rule="required" class="form-control input-lg" name="row2[y_realname]" type="text" value="" placeholder="请输入法人/个人姓名">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_idnumber" class="control-label col-xs-12 col-sm-2 is-required control-label">证件号码：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_idnumber" data-rule="required;IDcard" class="form-control input-lg" name="row2[y_idnumber]" type="text" value="" placeholder="请输入身份证号码">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_sex" class="control-label col-xs-12 col-sm-2 is-required control-label">性别：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="checkbox-inline">
                                            <input id="c-y_sex" data-rule="" name="row2[y_sex]" type="radio" value="男" checked>&nbsp;男
                                        </label>
                                        <label class="checkbox-inline">
                                            <input id="c-y_sex" data-rule="" name="row2[y_sex]" type="radio" value="女" >&nbsp;女&nbsp;
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_birthday" class="control-label col-xs-12 col-sm-2 is-required control-label">出生日期：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_birthday" data-date-format="YYYY-MM-DD" data-rule="required" class="form-control datetimepicker input-lg" name="row2[y_birthday]" type="datetime" value="" placeholder="请输入出生日期，格式为yyyy-mm-dd">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_mobile" class="control-label col-xs-12 col-sm-2 is-required control-label">手机号码：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_mobile" data-rule="required;mobile" class="form-control input-lg" name="row2[y_mobile]" type="text" value="" placeholder="请输入手机号码">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_email" class="control-label col-xs-12 col-sm-2 is-required control-label">邮箱号：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_email" data-rule="required;email" class="form-control input-lg" name="row2[y_email]" type="text" value="" placeholder="请输入邮箱号">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_address" class="control-label col-xs-12 col-sm-2 is-required control-label">联系地址：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_address" data-rule="required" class="form-control input-lg" name="row2[y_address]" type="text" value="" placeholder="请输入联系地址">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_management" class="control-label col-xs-12 col-sm-2 is-required control-label">账号管理员：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_management" data-rule="required" class="form-control input-lg" name="row2[y_management]" type="text" value="" placeholder="请输入扫码管理员姓名">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_manageid" class="control-label col-xs-12 col-sm-2 is-required control-label">管理员身份证：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_manageid" data-rule="required;IDcard" class="form-control input-lg" name="row2[y_manageid]" type="text" value="" placeholder="请输入扫码管理员身份证号">
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="c-y_position" class="control-label col-xs-12 col-sm-2 control-label">部门与职位：</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input id="c-y_position" data-rule="" class="form-control input-lg" name="row2[y_position]" type="text" value="" placeholder="请输入部门与职位(选填)">
                                    </div>
                                </div>
                                <!--<div class="form-group layer-footer">
                                    <label class="control-label col-xs-12 col-sm-5"></label>
                                    <div class="col-xs-12 col-sm-3">
                                        <button type="button" class="btn btn-up btn-primary" onclick="getnext('step1')" style="margin-right: 20px;">上一步</button>
                                        <button type="submit" class="btn btn-next btn-primary" onclick="getnext('step3')">下一步</button>
                                    </div>
                                </div>-->

                        </div>
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
                                                <input id="c-j_shenzheng" data-rule="required" class="form-control" size="50" name="row3[j_shenzheng]" type="text" value="">
                                                <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-j_shenzheng" class="btn btn-danger plupload" data-input-id="c-j_shenzheng" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-j_shenzheng">
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
                                                <input id="c-j_shenfan" data-rule="required" class="form-control" size="50" name="row3[j_shenfan]" type="text" value="">
                                                <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-j_shenfan" class="btn btn-danger plupload" data-input-id="c-j_shenfan" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-j_shenfan">
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
                                                <input id="c-j_license" data-rule="required" class="form-control" size="50" name="row3[j_license]" type="text" value="">
                                                <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-j_license" class="btn btn-danger plupload" data-input-id="c-j_license" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-j_license">
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
                                                <input id="c-j_screenshots" data-rule="required" class="form-control" size="50" name="row3[j_screenshots]" type="text" value="">
                                                <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-j_screenshots" class="btn btn-danger plupload" data-input-id="c-j_screenshots" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-j_screenshots">
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
                                                <input id="c-j_poweratt" data-rule="required" class="form-control" size="50" name="row3[j_poweratt]" type="text" value="">
                                                <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-j_poweratt" class="btn btn-danger plupload" data-input-id="c-j_poweratt" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-j_poweratt">
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
                                            <input id="c-y_shenzheng" data-rule="required" class="form-control" size="50" name="row4[y_shenzheng]" type="text" value="">
                                            <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-y_shenzheng" class="btn btn-danger plupload" data-input-id="c-y_shenzheng" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-y_shenzheng">
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
                                            <input id="c-y_shenfan" data-rule="required" class="form-control" size="50" name="row4[y_shenfan]" type="text" value="">
                                            <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-y_shenfan" class="btn btn-danger plupload" data-input-id="c-y_shenfan" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-y_shenfan">
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
                                            <input id="c-y_license" data-rule="required" class="form-control" size="50" name="row4[y_license]" type="text" value="">
                                            <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-y_license" class="btn btn-danger plupload" data-input-id="c-y_license" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-y_license">
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
                                            <input id="c-y_screenshots" data-rule="required" class="form-control" size="50" name="row4[y_screenshots]" type="text" value="">
                                            <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-y_screenshots" class="btn btn-danger plupload" data-input-id="c-y_screenshots" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-y_screenshots">
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
                                            <input id="c-y_poweratt" data-rule="required" class="form-control" size="50" name="row4[y_poweratt]" type="text" value="">
                                            <div class="input-group-addon no-border no-padding">
                                                    <span>
                                                        <button type="button" id="plupload-y_poweratt" class="btn btn-danger plupload" data-input-id="c-y_poweratt" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-y_poweratt">
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

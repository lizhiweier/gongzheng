<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"G:\code\gongzheng\addons\epay\view\api\wechat.html";i:1600399408;s:54:"G:\code\gongzheng\addons\epay\view\layout\default.html";i:1600522160;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?> - FastAdmin</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/addons/epay/css/common.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.staticfile.org/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        &lt;!&ndash; Brand and toggle get grouped for better mobile display &ndash;&gt;
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo addon_url('epay/index/index'); ?>">FastAdmin</a>
        </div>
        &lt;!&ndash; Collect the nav links, forms, and other content for toggling &ndash;&gt;
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                </li>
                <?php if($user): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">欢迎你! <?php echo $user['nickname']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo url('index/user/index'); ?>">会员中心</a>
                        </li>
                        <li>
                            <a href="<?php echo url('index/user/profile'); ?>">个人资料</a>
                        </li>
                        <li>
                            <a href="<?php echo url('index/user/logout'); ?>">退出登录</a>
                        </li>
                    </ul>
                </li>
                <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">会员中心 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo url('index/user/login'); ?>">登录</a>
                        </li>
                        <li>
                            <a href="<?php echo url('index/user/register'); ?>">注册</a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        &lt;!&ndash; /.navbar-collapse &ndash;&gt;
    </div>
    &lt;!&ndash; /.container &ndash;&gt;
</nav>-->

<link rel="stylesheet" href="/assets/addons/epay/css/wechat.css" />

<?php if($type=='jsapi'): ?>
<div class="container">
    <div class="row" style="margin-top:20px;">
        <div class="col-xs-12">
            <button type="button" class="btn btn-success btn-lg btn-block">正在发起微信支付</button>
            <button type="button" class="btn btn-default btn-lg btn-block" onclick="location.href='<?php echo $orderData['returnurl']; ?>'">如果页面未自动跳转</button>
        </div>
    </div>
</div>
<script>
    function onBridgeReady(){
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest', <?php echo json_encode($payData); ?>,
            function(res){
                if (res.err_msg == "get_brand_wcpay_request:ok") {
                    layer.msg('支付成功！');
                } else if (res.err_msg == "get_brand_wcpay_request:cancel") {
                    layer.msg('您取消了支付');
                } else if (res.err_msg == "get_brand_wcpay_request:fail") {
                    layer.msg('支付失败');
                }
                setTimeout(function () {
                    location.href = '<?php echo $orderData['returnurl']; ?>';
                }, 1500);
            });
    }
    if (typeof WeixinJSBridge == "undefined"){
        if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
        }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
            document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
        }
    }else{
        onBridgeReady();
    }
</script>
<?php elseif($type=='pc'): ?>
<div class="container">
    <div class="wechat">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2>
                    <img src="/assets/addons/epay/images/logo-wechat.png" alt="" height="32" class="pull-left" style="margin-right:5px;"> 微信支付
                    <div class="wechat-time">
                        请在 <span>60</span> 秒内完成支付
                    </div>
                </h2>

                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="wechat-body">
                            <div class="wechat-order clearfix">
                                <p>订单标题：<em><?php echo $data['body']; ?></em></p>
                                <p>订单编号：<em><?php echo $data['out_trade_no']; ?></em></p>
                                <p>订单价格：<em class="wechat-price">￥<?php echo $data['total_fee']/100; ?></em> 元</p>
                            </div>
                            <div class="wechat-qrcode">
                                <img src="<?php echo addon_url('epay/api/qrcode',[],false); ?>?text=<?php echo $data['code_url']; ?>">
                                <div class="expired hidden"></div>
                                <div class="paid hidden"></div>
                            </div>
                            <div class="wechat-tips">
                                <p>请使用微信扫一扫<br>扫描二维码支付</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 hidden-xs">
                        <div class="wechat-scan">
                            <img src="/assets/addons/epay/images/tips.png" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    var queryParams = <?php echo json_encode($data); ?>;
</script>
<?php endif; ?>

<div class="container">
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <p>Copyright &copy; <a href="https://www.fastadmin.net">FastAdmin</a> 2017-1019</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="/assets/libs/fastadmin-layer/dist/layer.js"></script>

<script src="/assets/addons/epay/js/common.js"></script>

</body>

</html>

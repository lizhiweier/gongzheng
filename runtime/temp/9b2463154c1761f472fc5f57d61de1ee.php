<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"G:\code\gongzheng\public/../application/index\view\order\msgerror.html";i:1601689416;s:59:"G:\code\gongzheng\application\index\view\common\script.html";i:1588765311;}*/ ?>
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
        </header>
        <div class="content">
            <div style="height: 50vh;margin-top: 20vh;margin-bottom: 80px;text-align: center;font-size: 20px;">
                <?php echo $message; ?>
            </div>
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

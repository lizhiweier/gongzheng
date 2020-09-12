<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"J:\code\gongzheng\public/../application/admin\view\order\civil\index.html";i:1599661151;s:60:"J:\code\gongzheng\application\admin\view\layout\default.html";i:1588765311;s:57:"J:\code\gongzheng\application\admin\view\common\meta.html";i:1588765311;s:59:"J:\code\gongzheng\application\admin\view\common\script.html";i:1588765311;}*/ ?>
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
                                <div class="panel panel-default panel-intro">
    <?php echo build_heading(); ?>
<style>
    .hover {
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
    }

    .hover .overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
    }

    .hover img {
        display: block;
        position: relative;
    }

    .hover h2 {
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        position: relative;
        font-size: 17px;
        padding: 10px;
        background: rgba(0, 0, 0, 0.6);
    }

    .hover button.info {
        display: inline-block;
        text-decoration: none;
        padding: 7px 14px;
        text-transform: uppercase;
        color: #fff;
        border: 1px solid #fff;
        margin: 50px 0 0 0;
        border-radius: 0px;
        background-color: transparent;
    }

    .hover button.info:hover {
        box-shadow: 0 0 5px #fff;
    }

    /* styling to remove box shadow and border from buttons for last few effects */

    .hover button.nullbutton {
        border: none;
        padding: 0px;
        margin: 0px;
    }

    .hover button.nullbutton:hover {
        box-shadow: none;
    }

    /* remove the blue line that shows on modal buttons after you have open and close a modal */

    .modal-open .modal, button:focus {
        outline:none!important
    }

    /* styling so when hovering over a div that opens a modal the cursor changes to a pointer */
    .point {
        cursor: pointer;
    }

    /* effect 13 */



    .ehover13 img
    {
        transition: all 0.35s;
    }

    .ehover13:hover img
    {
        filter: brightness(0.6);
        -webkit-filter: brightness(0.6);
    }

    .ehover13 .overlay {
        width: 80%;
        height: 80%;
        left: 10%;
        top: 10%;
        border-bottom: 1px solid #FFF;
        border-top: 1px solid #FFF;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: scale(0,1);
        transform: scale(0,1);
    }



    .ehover13:hover .overlay {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);

    }

    .ehover13 button {
        color:	#FFF;
        padding: 1em 0;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
    }

    .ehover13 h2 {
        background-color: transparent;
        color:	#FFF;
        padding: 1em 0;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0);
    }



    .ehover13:hover button, .ehover13:hover h2{
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }


</style>


    <div class="panel-body">

        <div class="row">
            <div class="col-xs-6 col-md-2">
                <div class="hover ehover13">
                    <a href="#" class="thumbnail">
                        <img src="/assets/img/avatar.png" alt="...">
                    </a>
                    
                </div>
            </div>
        </div>

    </div>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
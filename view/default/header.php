<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($title) ? $title. ' - ' : '' ?>
        <?php echo $this->config['sitename']?></title>
    <meta name="description" content="{:config('sysconf.description')}">
    <meta name="keywords" content="{:config('sysconf.keywords')}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/static/default/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/static/default/assets/css/admin.css">
    <link rel="stylesheet" href="/static/default/assets/css/app.css">
    <link rel="stylesheet" href="/static/common/layui/css/layui.css">
    <script src="/static/default/assets/js/jquery.min.js"></script>
    <script src="/static/common/layer/layer.js" type="text/javascript"></script>
    <script src="/static/common/layui/layui.js"></script>
    <script src="/static/default/assets/js/amazeui.min.js" type="text/javascript"></script>
    <script src="/static/default/assets/js/app.js"></script>
    <script src="/static/default/js/app.js"></script>

</head>
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">

        <div class="tpl-logo">
            <?php echo $this->config['sitename'] ?> <i class="am-icon-skyatlas"></i>

        </div>

    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">


            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span
                            class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>


        </ul>
    </div>
</header>
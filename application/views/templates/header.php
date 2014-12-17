<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<meta content="IE=Edge" http-equiv="X-UA-Compatible">
<meta charset="UTF-8">
<title><?php echo $title ?> - 模拟情侣</title> 

<link href="<?php echo base_url('static/img/shortcut.ico') ?>" rel="shortcut icon">
<link href="<?php echo base_url('static/img/shortcut.ico') ?>" rel="icon">

<link href="<?php echo base_url('static/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('static/css/square/grey.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('static/css/baidu.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('static/css/bootstrap-select.min.css') ?>" rel="stylesheet">

<script src="<?php echo base_url('static/js/jquery-1.11.1.min.js') ?>"></script>
<script src="<?php echo base_url('static/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('static/js/baidu.js') ?>"></script>
<script src="<?php echo base_url('static/js/bootstrap-select.min.js') ?>"></script>

<script type="text/javascript">
    $(function(){
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 200){
                $("header").removeClass("yl").addClass("sense");
            } else {
                $("header").removeClass("sense").addClass("yl");
            }
        });
        //当点击跳转链接后，回到页面顶部位置
        // $("#gotop").click(function(){
        //     $('body,html').animate({scrollTop:0},500);
        //     return false;
        // });
    });

</script>

</head>

<body>

        <!-- 顶部标题栏  -->


<header class="navbar navbar-fixed-top yl">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-default navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="#">百度菁英俱乐部</a>
    </div>

    <nav class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
            <li title="首页">
                <a href="<?php echo base_url() ?>" data-hover="首页">首页</a>
            </li>
<!--             <li title="规则">
                <a href="#" data-hover="规则">规则</a>
            </li> -->
<!--             <li class="dropdown">
                <a href="#" data-hover="报名">报名</a>
            </li> -->
            <li title="报名">
                <a href="<?php echo base_url('index.php/lovers/register') ?>" data-hover="报名">报名</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-pills">
<!--             
            <li>
                <form method="get" target="_blank" class="header_search" action="http://www.baidu.com/s">
                    <label class="search_label header_search">搜索</label><input type="text" class="header_search" maxlength="20" name="wd">
                </form>
            </li> 
-->
<!--                 <li title="登录">
                    <a href="#">登录</a>
                </li>  -->           
            
        </ul>
    </nav>


    </div>
</header>

        <!-- /顶部标题栏  -->

    <!--  /header  -->

    <!-- main -->
<div id="head" class="row">

    <div class="jumbotron">
        <div class="container">
            <h1>模拟情侣</h1>
        </div>
    </div>
</div>
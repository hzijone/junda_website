
<style type="text/css" media="screen">

.nav > li .dropdown-menu {
margin: 0;
}
.nav > li:hover .dropdown-menu {
display: block;
}

</style>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>竣达技术-UPS监控技术专家</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-ico">
    <script src="extlib/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="extlib/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="extlib/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
    <script src="extlib/bootstrap-3.3.5-dist/js/tooltip.js" type="text/javascript" charset="utf-8" ></script>
    <script src="extlib/bootstrap-3.3.5-dist/js/carousel.js" type="text/javascript" charset="utf-8" ></script>


    <div class="container">

     <div class="row">
         <div class="col-sm-8">
            <a href="index.php" title="junda_home">
              <img src="images/junda-logo-small.png" height="36" width="227" alt="junda_logo"><br>
              <span style="color:blue">
               因为专注，所以专业
              </span>
            </a>
         </div>
         <div class="col-sm-2">
            <a href="http://e.t.qq.com/junda-tech?preview" title="txwb" target="_black">
              <img src="images/txwb.jpg" height="26" width="29" alt="junda_txwb">
            </a>
         </div>

   <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="right">
          <span style="font-size:15px ">24小时服务热线</span><br>
          <span style="color:#1F0CF1;font-size:30px">4001-8875</span>
     </div>



     </div>

   </div>
     <br>

    <div class="container">
    <!-- 主菜单下拉菜单  -->
    <div class="row">
    <div class="col-sm-12">

      <nav class="navbar navbar-inverse" role="navigation">

        <a class="navbar-brand" href="index.php?fpage=index.php" <?php if ($_GET['fpage'] == "index.php") {
	echo " class='active'";
}
?>>公司首页</a>


        <ul class="nav navbar-nav">





        <li class="dropdown <?php if ($_GET['fpage'] == 'product.php') {
	echo 'active';
}
?>">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">产品介绍</a>
            <ul class="dropdown-menu" style="z-index:5">
                <li><a href="product.php?fpage=product.php" data-toggle="tooltip" data-placement="bottom">UPS监控管理</a></li>
                <li><a href="">电池巡检管理</a></li>
                <li><a href="">工厂合作配套</a></li>
                <li><a href="">环境监控扩展</a></li>

                <li role="separator" class="divider"></li>

                <li><a href="">应用方案</a></li>
            </ul>

        </li>


        <li  role="presentation" <?php if ($_GET['fpage'] == "usercase.php") {
	echo " class='active'";
}
?>><a href="usercase.php?fpage=usercase.php" title=""  data-toggle="tooltip" data-placement="bottom" title="应用方案">应用方案</a></li>


        <li role="presentation" <?php if ($_GET['fpage'] == "feedback.php") {
	echo " class='active'";
}
?>><a href="feedback.php?fpage=feedback.php" data-toggle="tooltip" data-placement="bottom" title="产品反馈">产品反馈</a></li>

        <li role="presentation" <?php if ($_GET['fpage'] == "support.php") {
	echo " class='active'";
}
?>><a href="support.php?fpage=support.php"  data-toggle="tooltip" data-placement="bottom" title="技术支持">技术支持</a></li>
        <li role="presentation" <?php if ($_GET['fpage'] == "aboutjundatech.php") {
	echo " class='active'";
}
?>><a href="aboutjundatech.php?fpage=aboutjundatech.php"  data-toggle="tooltip" data-placement="bottom" title="关于我们">关于我们</a></li>
    </ul>
    </nav>
    </div>
    </div>
    </div>


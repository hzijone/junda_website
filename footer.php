<?php
// require_once("tail.php");
?>
<style type="text/css" media="screen">
   .logo{

   	   width: 100%;
   	   /*height: 78px;*/
   	   text-align: center;
   	   /*line-height: */
      background: rgba(0,0,0,0.8);
   }

</style>

<!-- <footer>

     <div class="logo">

     <div class="container">
       <div class="row">
       	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="logo">
        <p class="text-muted text-middle">版权所有© 广州市竣达智能软件技术有限公司 2009-2013　保留一切权利 粤ICP备09019571号</p>
        </div>

       	</div>

        </div>
      </div>

</footer> -->


<style type="text/css" media="screen">
 .footer {

    width: 100%;
    /*margin-top:10px;*/
    height: 60px;
    text-align: center;
    background: rgba(0,0,0,0.8);
    /*position:fixed;*/

    /*bottom:0;*/
}
.logo1 {
    color: #fff;
    /*width: 100%;*/
    display: inline-block;
    /*float: center;*/
    text-align: center;
    font-weight: lighter;
    padding-top: 15px;
    /*line-height:-10px;*/
}



</style>

<!-- <div style="position:fixed;bottom:0"> -->



<!-- <footer class="footer" id="footer">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="logo1">
             <?php
// echo "(C)<a href='http://www.junda-tech.com'>广州市竣达智能软件技术有限公司</a>(版权所有)";
?>
            </div>
        </div>
    </div>
</div>
</footer>
 -->

<footer class="footer navbar-fixed-bottom ">
    <div class="container">
            <div class="logo1">
    <a href='http://www.junda-tech.com' style="color:#FFF">广州市竣达智能软件技术有限公司</a>(版权所有)
    </div>
    </div>
</footer>



<script type="text/javascript">


            // Window load event used just in case window height is dependant upon images
            $(window).bind("load", function() {
              var footerHeight = 0,
                  footerTop = 0,
                  $footer = $("#footer");
              positionFooter();
              //定义positionFooter function
              function positionFooter() {
                //取到div#footer高度
                footerHeight = $footer.height();
                //div#footer离屏幕顶部的距离
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";

                /* DEBUGGING STUFF
                  console.log("Document height: ", $(document.body).height());
                  console.log("Window height: ", $(window).height());
                  console.log("Window scroll: ", $(window).scrollTop());
                  console.log("Footer height: ", footerHeight);
                  console.log("Footer top: ", footerTop);
                  console.log("-----------")
                */
                //如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位
                if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                  $footer.css({
                    position: "absolute"
                  }).stop().animate({
                    top: footerTop
                  });
                } else {
                  $footer.css({
                    position: "static",
                    marginTop: "10px"
                  });
                }
              }
              $(window).scroll(positionFooter).resize(positionFooter);
            });


</script>
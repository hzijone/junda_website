<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php 
require_once("header.php");

?>
<script src="extlib/bootstrap-3.3.5-dist/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<script src="extlib/bootstrap-3.3.5-dist/js/collapse.js" type="text/javascript" charset="utf-8"></script>
<script src="extlib/bootstrap-3.3.5-dist/js/scrollspy.js" type="text/javascript" charset="utf-8"></script>
<script src="extlib/bootstrap-3.3.5-dist/js/tab.js" type="text/javascript" charset="utf-8"></script>

<div class="container">
 <div class="row">
   <div class="col-md-3" role="main">
    <!--  <div class="collapse navbar-collapse js-navbar-scrollspy">
            

     </div> -->
        <div>
        <a href="#application_sch" class="btn" title="" data-toggle="collapse" onclick="if($('#arrow_app').hasClass('glyphicon-menu-down')) $('#arrow_app').attr('class','glyphicon glyphicon-menu-right'); else $('#arrow_app').attr('class','glyphicon glyphicon-menu-down'); ">应用方案
        <b id="arrow_app" class="glyphicon glyphicon-menu-down"></b>
        </a>        
        <div id="application_sch" class="collapse in">
        <ul>
           <li><a href="#protect_app" title="">UPS短信报警监控方案</a></li>
           <li><a href="#message_app" title="">UPS供电服务器关机保护应用方案</a></li>
        </ul>
       </div>

        </div>


   </div>

   


   <div  class="col-md-8">

     <div id="protect_app">     
          <h2>UPS短信报警监控方案</h2>
            <hr />    
       <div class="row">
          <div style="float:left;margin:0;" class="col-md-3">
           
            <img src="images/UPS ALARM 2-283.png" height="200" width="335" alt="">
           </div>
           <div class="col-md-offset-3 col-md-5">
               随着信息时代的来临和迅猛发展，信息存储的安全已经得到普遍的重视，为了防止计算机系统供电中断，UPS已经成为了机房中必不可少的重要设备。但是,作为保障计算机系统供电的最后保障：UPS环节，UPS工作的有效性和可靠性，正成为信息安全的一个新的隐患！一个没有被监控的UPS供电系统，就像一个从没有更新过病毒库的病毒防护软件，更容易让管理人员为安全的假象所迷惑。
                <p><a class="btn btn-primary" href="#" title="">阅读更多 &raquo;</a></p>
           </div>
       </div>
     </div>
           
      <div id="message_app">
          <h2>UPS供电服务器关机保护应用方案</h2>
          <hr>
          <div class="row">
              <div style="float:left;margin:0" class="col-md-2">              
              <img src="images/jumultithumb_joomla-ua.org" alt="">
              </div>
             
             <div class="col-md-10">
                  <p> 重要数据系统的计算机（PC或服务器）一般都使用UPS以防止突发的电源故障造成重要的数据资料的损失，但这是不够的，实际上您可以对所有电源事件导致的破坏性结果进行预防，然而您无法预计或控制电源事件发生的时间，而当断电发生时UPS只能提供有限时间的的电力输出，在UPS的电池电源耗尽，从而可能导致发生计算机不正常关机，造成资料的损失及作业系统损毁之时，您也不一定就在现场。如何合理地运用UPS的供电时间，使所有的计算机设备能被安全正常地关闭，发挥UPS的完善保护功能是每个信息系统管理员应该考虑的问题。</p>
                  <a href="#" class="btn btn-primary" title="">阅读更多 &raquo;</a>
             </div>
        </div>

      </div> 

   </div>





    
<!-- row -->
 </div>
    


</div>














<?php
 
 require_once("footer.php");

?> 


</body>
</html>
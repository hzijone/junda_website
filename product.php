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
<!-- 进行开关切换 -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>

<style type="text/css">
    .btn-w3r{
        /*border:0;*/
        border-radius:0px;

        border-color:#8A8686;
    }
</style>

<br>
<div class="container">
<div class="row">
    <!-- 产品左侧 -->
    <div class="col-md-3" role="main">
      <div class="collapse navbar-collapse js-navbar-scrollspy">

       <ul class="nav navbar-nav">

           <li style="display:block;width:200px">
            <a  class="btn btn-w3r" class="dropdown-toggle" data-toggle="collapse" href="#collapse_ipguard" onclick="if($('#arrow').hasClass('glyphicon-menu-right')) $('#arrow').attr('class','glyphicon glyphicon-menu-down'); else $('#arrow').attr('class','glyphicon glyphicon-menu-right'); ">UPS监控管理
            
            <b id="arrow" class="glyphicon glyphicon-menu-right" ></b>
            
            </a>

            <div id="collapse_ipguard" class="collapse">
              <ul role="menu">
                  <li><a href="#ipguard_wai">IPGuard外置监控卡</a></li>
                  <li><a href="#ipguard_nei">IPGuard内置监控卡</a></li>
                  <li><a href="#ipguard_zhonghe">综合型UPS环境监控终端</a></li>
                  <li><a href="#ippuard_ultimate">机架式UPS综合环境监控终端</a></li>
                  <li><a href="#ipguard_message">UPS智能短信报警器</a></li>
                  <li><a href="#ipguard_as400">UPS干节点输出扩展卡(AS400卡)</a></li>
                  <li><a href="#ipguard_tran">UPS通讯协议转换器</a></li>
                  <li><a href="#ipguard_pmcenter">PmCenter不间断电源综合监控平台</a></li>
                  <li><a href="#ipguard_factory">工业型短信发送终端</a></li>
                  <li><a href="#ipguard_zhb">UPS智能插槽接口转换板(内置)</a></li>
                  <li><a href="#ipguard_interval">UPS通讯信号中继模块</a></li>
              </ul>

            </div>
            

           </li>
           <li style="display:block;width:200px"><a class="btn btn-w3r" href="#battery">电池巡检管理</a></li>
           <li style="display:block;width:200px"><a class="btn btn-w3r" href="#factory">工厂合作配套        </a></li>
           <li style="display:block;width:200px"><a class="btn btn-w3r" href="#envexpand">环境监控扩展        </a></li>
           <li style="display:block;width:200px"><a class="btn btn-w3r" href="#usercase">应用方案            </a></li>
       </ul>

      </div>
    </div>

   <!-- 产品右侧主体 -->
    <div class="col-md-9" role="complementary">
        
        <!-- 外置监控卡 -->
        <div id="myTabContent" class="tab-content">

         <div id="ipguard_wai">
             <span style="color:blue;font-size:25px">UPS网络监控终端（外置）</span>              
             <!-- <ul class="nav nav-list"> <li role="separator" class="divider"></li></ul> -->
             <br>
            <div>
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active" ><a href="#ipguard_wai_norm" title="" role="tab" data-toggle="tab" aria-controls="ipguard_wai_norm" aria-expanded="true">技术规格</a></li>
                    <li role="presentation" data-toggle="tab"><a href="#ipguard_wai_app" title="" role="tab" data-toggle="tab" aria-controls="ipguard_wai_norm" aria-expanded="true">应用方案</a></li>
                </ul>
            </div>

         </div>
         <div id="ipguard_wai_norm" role="tabpanel" class="tab-pane fade in active">
              <ul>
                  <li>宽电源输入范围，支持9-30V供电，配合适配器支持85-265VAC</li>
                  <li>采用标准的TCP/IP SNMP协议！适用于各类兼容的网络</li>
                  <li>支持WWW，用户可以在任何电脑上，通过浏览器随时查看设备状态，管理UPS</li>
                  <li>支持控制台，TELNET等多种管理途径，简化用户的操作。</li>
                  <li>支持多路监控扩展，可选配“环境温度采集模块”“环境温湿度采集模块”实现机房环境监控</li>
                  <li>支持SNMP管理,兼容：RFC1628 RFC1516</li>
                  <li>具有长寿命电池，保持实时时钟，并具备网络自动校时功能</li>
                  <li>设备运行事件存储，方便用户追朔设备历史运行状态</li>
                  <li>支持多用户及权限控制管理</li>
                  <li>开放数据接口，可提供OPC，OCX等而二次开发组件</li>
                  <li>设备支持网络升级，可以享受后续产品升级，功能增强的便利，保护用户的投资</li>
                  <li>提供硬件拨码开关的设置模式</li>
              </ul>
         </div>

         <div id="ipguard_wai_app" class="tab-pane fade">
             <img src="images/ipguard/UPS-1-2184.png" height="408" width="633" alt="">
         </div>
         </div>



          <!-- 内置卡监控 -->
          <div id="ipguard_nei" class="span12">
             <p>
             efore they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco co
             </p> 
         </div>
    
        <div id="ipguard_zhonghe" class="span12">
             <p>
             efore they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco co
             </p> 
         </div>


       
      


    </div>


</div>
</div>

<?php 
require_once("footer.php");
?>
</body>
</html>
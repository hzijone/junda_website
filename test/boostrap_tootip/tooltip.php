<!DOCTYPE html>
<html>
<head>
<!-- Local bootstrap CSS & JS -->
<link rel="stylesheet" media="screen" href="../../bootstrap-3.3.5-dist/css/bootstrap.min.css">
<script src="../../extlib/jquery-1.11.1.min.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/popover.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/tooltip.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/transition.js"></script>
   <title>Bootstrap 实例 - 弹出框（Popover）插件方法</title>
</head>
<body>

<div class="container" style="padding: 100px 50px 10px;" >
   <button type="button" class="btn btn-default popover-show" 
      title="Popover title" data-container="body" 
      data-toggle="popover" data-placement="left" 
      data-content="左侧的 Popover 中的一些内容 —— show 方法">
      左侧的 Popover
   </button>
   <button type="button" class="btn btn-primary popover-hide" 
      title="Popover title" data-container="body" 
      data-toggle="popover" data-placement="top" 
      data-content="顶部的 Popover 中的一些内容 —— hide 方法">
      顶部的 Popover
   </button>
   <button type="button" class="btn btn-success popover-destroy" 
      title="Popover title" data-container="body" 
      data-toggle="popover" data-placement="bottom" 
      data-content="底部的 Popover 中的一些内容 —— destroy 方法">
      底部的 Popover
   </button>
   <button type="button" class="btn btn-warning popover-toggle" 
      title="Popover title" data-container="body" 
      data-toggle="popover" data-placement="right" 
      data-content="右侧的 Popover 中的一些内容 —— toggle 方法">
      右侧的 Popover
   </button><br><br><br><br><br><br>
   <p class="popover-options">
      <a href="#" type="button" class="btn btn-warning" title="<h2>Title</h2>"  
         data-container="body" data-toggle="popover"  data-content='
         <iframe runat="server" src=html.php" width="750" height="90" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
         '>
         Popover
      </a>
   </p>





   <script>
      $(function () { $('.popover-show').popover('show');});
      $(function () { $('.popover-hide').popover('hide');});
      $(function () { $('.popover-destroy').popover('destroy');});
      $(function () { $('.popover-toggle').popover('toggle');});
     $(function () {

      $(".popover-options a").popover({html : true });


 });
   </script>
</div>

</body>
</html>
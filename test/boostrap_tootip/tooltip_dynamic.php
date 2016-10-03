<!-- Local bootstrap CSS & JS -->
<link rel="stylesheet" media="screen" href="../../bootstrap-3.3.5-dist/css/bootstrap.min.css">
<script src="../../extlib/jquery-1.11.1.min.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/popover.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/tooltip.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/transition.js"></script>



<div class="container" style="margin-top: 100px">
<div class="row">
 			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<button type="button" class="btn btn-default js-popover" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on 左侧
              </button>
 				
 			</div>

	</div>	

</div>
<script type="text/javascript">
	$(function(){
        var html = '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>';

     $(".js-popover").popover({ trigger: "hover" , html: true, animation:false,template:html})



//      $(".js-popover").popover({ trigger: "manual" , html: true, animation:false})
//     .on("mouseenter", function () {
//         var _this = this;
//         $(this).popover("show");
//         $(".popover").on("mouseleave", function () {
//             $(_this).popover('hide');
//         });
//     })
//     .on("mouseleave", function () {
//         var _this = this;
//         setTimeout(function () {
//             if (!$(".popover:hover").length) {
//                 $(_this).popover("hide");
//             }
//         }, 3000);
// });

   // $(".js-popover").popover({
   // 	  trigger:"hover",
   // 	  html:true,
   // 	  animate:true,
   // 	  // delay:{"show":500,"hide":5000}
   	  
   // 	  });






	})
</script>
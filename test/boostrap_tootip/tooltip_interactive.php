<!-- Local bootstrap CSS & JS -->
<link rel="stylesheet" media="screen" href="../../bootstrap-3.3.5-dist/css/bootstrap.min.css">
<script src="../../extlib/jquery-1.11.1.min.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/popover.js"></script>
<script src="tooltip.js"></script>
<script src="../../bootstrap-3.3.5-dist/js/transition.js"></script>


<div id="tooltip">bs tooltip:你能点击链接？</div>
<hr>
<div  id="delayTooltip">delay tooltip：尝试点击链接</div>
<hr>
<div id="delayTooltipInHtml" data-html="true" data-placement="bottom" data-toggle="delayTooltip">delay tooltip:利用html标签实现</div>



<script type="text/javascript">
	(function(global, $){

    var page = function(){

    };

    page.prototype.bootstrap = function(){
        var html = 'Weclome to my blog <a target="_blank" href="greengerong.github.io">破狼博客</a>!<input type="text" placeholder="input some thing"/>';
        $('#tooltip').tooltip( {
            html: true,
            placement: 'top',
            title: html
        });

        $('#delayTooltip').delayTooltip( {
            html: true,
            placement: 'bottom',
            title: html
        });

  $('#delayTooltipInHtml').attr('title', html).delayTooltip();

  return this;
};

     global.Page = page;

})(this, jQuery);

$(function(){
    'use strict';
    var page = new window.Page().bootstrap();
    //
});

</script>
<?php

function doReturnAdminWidgetOutput(){
 
  $widgetOutput = <<<WIDGETOUTPUT
  <div id = "crg-help-widget-image-div">
  </div>
   <div class = "crg-help-widget-item">
  	<a href = "https://youtu.be/cS5j_UcIVaA" target = "_blank">How to process a refund</a>
  </div>
     <div class = "crg-help-widget-item">
  	<a href = "https://youtu.be/TWYSobESEVg" target = "_blank">How to give a discount coupoun</a>
  </div>
  <div class = "crg-help-widget-item">
  	<a href = "https://www.youtube.com/watch?v=HXPoQ3-cSGI&feature=youtu.be">How to change a person's email</a>
  </div>
  <div class = "crg-help-widget-item">
  	<a href = "http://customrayguns.com/contact/" target = "_blank">Ask Custom Ray Guns a question</a>
  </div>
<script>
jQuery('document').ready(function(){
   //alert('yo');
});
</script>
WIDGETOUTPUT;

  return $widgetOutput;
  
}

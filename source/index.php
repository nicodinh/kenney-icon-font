<?php

$stuff = '
.ki.ki-arrow-top:before{ content: "\e900"; }
.ki.ki-arrow-right:before{ content: "\e901"; }
.ki.ki-arrow-bottom:before{ content: "\e902"; }
.ki.ki-arrow-left:before{ content: "\e903"; }
.ki.ki-arrow-top-right:before{ content: "\e904"; }
.ki.ki-arrow-bottom-right:before{ content: "\e905"; }
.ki.ki-arrow-bottom-left:before{ content: "\e906"; }
.ki.ki-arrow-top-left:before{ content: "\e907"; }
.ki.ki-caret-top:before{ content: "\e908"; }
.ki.ki-caret-right:before{ content: "\e909"; }
.ki.ki-caret-bottom:before{ content: "\e90a"; }
.ki.ki-caret-left:before{ content: "\e90b"; }
.ki.ki-next:before{ content: "\e90c"; }
.ki.ki-next-alt:before{ content: "\e90d"; }
.ki.ki-previous-alt:before{ content: "\e90e"; }
.ki.ki-previous:before{ content: "\e90f"; }
.ki.ki-adjust:before{ content: "\ea001"; }
.ki.ki-bottom:before{ content: "\e910"; }
.ki.ki-check:before{ content: "\e911"; }
.ki.ki-circle:before{ content: "\e912"; }
.ki.ki-circle-dot:before{ content: "\e913"; }
.ki.ki-cloud:before{ content: "\e914"; }
.ki.ki-cloud-upload:before{ content: "\e915"; }
.ki.ki-cells:before{ content: "\e916"; }
.ki.ki-grid:before{ content: "\e917"; }
.ki.ki-grid-list:before{ content: "\e918"; }
.ki.ki-backward:before{ content: "\e919"; }
.ki.ki-badge:before{ content: "\e91a"; }
.ki.ki-badge-alt:before{ content: "\e91b"; }
.ki.ki-button-a:before{ content: "\e91c"; }
.ki.ki-button-b:before{ content: "\e91d"; }
.ki.ki-button-l:before{ content: "\e91e"; }
.ki.ki-button-l1:before{ content: "\e91f"; }
.ki.ki-button-l2:before{ content: "\e920"; }
.ki.ki-button-one:before{ content: "\e921"; }
.ki.ki-button-r:before{ content: "\e922"; }
.ki.ki-button-r1:before{ content: "\e923"; }
.ki.ki-button-r2:before{ content: "\e924"; }
.ki.ki-button-select:before{ content: "\e925"; }
.ki.ki-button-start:before{ content: "\e926"; }
.ki.ki-button-three:before{ content: "\e927"; }
.ki.ki-button-two:before{ content: "\e928"; }
.ki.ki-button-x:before{ content: "\e929"; }
.ki.ki-button-y:before{ content: "\e92a"; }
.ki.ki-car:before{ content: "\e92b"; }
.ki.ki-cog:before{ content: "\e92c"; }
.ki.ki-coin:before{ content: "\e92d"; }
.ki.ki-computer:before{ content: "\e92e"; }
.ki.ki-cub:before{ content: "\e92f"; }
.ki.ki-cursor:before{ content: "\e930"; }
.ki.ki-device:before{ content: "\e931"; }
.ki.ki-device-tilt-left:before{ content: "\e932"; }
.ki.ki-device-tilt-right:before{ content: "\e933"; }
.ki.ki-diamond:before{ content: "\e934"; }
.ki.ki-download:before{ content: "\e935"; }
.ki.ki-dpad:before{ content: "\e936"; }
.ki.ki-dpad-alt:before{ content: "\e937"; }
.ki.ki-dpad-bottom:before{ content: "\e938"; }
.ki.ki-dpad-left:before{ content: "\e939"; }
.ki.ki-dpad-right:before{ content: "\e93a"; }
.ki.ki-dpad-top:before{ content: "\e93b"; }
.ki.ki-eraser:before{ content: "\e93c"; }
.ki.ki-exclamation:before{ content: "\e93d"; }
.ki.ki-exclamation-circle:before{ content: "\e93e"; }
.ki.ki-exclamation-circle-alt:before{ content: "\e93f"; }
.ki.ki-exclamation-triangle:before{ content: "\e940"; }
.ki.ki-exit:before{ content: "\e941"; }
.ki.ki-expand:before{ content: "\e942"; }
.ki.ki-external:before{ content: "\e943"; }
.ki.ki-figure:before{ content: "\e944"; }
.ki.ki-fill:before{ content: "\e945"; }
.ki.ki-fist-circle:before{ content: "\e946"; }
.ki.ki-fist:before{ content: "\e947"; }
.ki.ki-flag:before{ content: "\e948"; }
.ki.ki-flap:before{ content: "\e949"; }
.ki.ki-forward:before{ content: "\e94a"; }
.ki.ki-gamepad:before{ content: "\e94b"; }
.ki.ki-gamepad-alt:before{ content: "\e94c"; }
.ki.ki-gamepad-tilt-left:before{ content: "\e94d"; }
.ki.ki-gamepad-tilt-right:before{ content: "\e94e"; }
.ki.ki-home:before{ content: "\e94f"; }
.ki.ki-info:before{ content: "\e950"; }
.ki.ki-info-circle:before{ content: "\e951"; }
.ki.ki-info-circle-alt:before{ content: "\e952"; }
.ki.ki-joystick:before{ content: "\e953"; }
.ki.ki-joystick-alt:before{ content: "\e954"; }
.ki.ki-joystick-left:before{ content: "\e955"; }
.ki.ki-joystick-right:before{ content: "\e956"; }
.ki.ki-key:before{ content: "\e957"; }
.ki.ki-key-large:before{ content: "\e958"; }
.ki.ki-key-large-3d:before{ content: "\e959"; }
.ki.ki-key-small:before{ content: "\e95a"; }
.ki.ki-key-small-3d:before{ content: "\e95b"; }
.ki.ki-lock:before{ content: "\e95c"; }
.ki.ki-minus:before{ content: "\e95d"; }
.ki.ki-minus-alt:before{ content: "\e95e"; }
.ki.ki-minus-circle:before{ content: "\e95f"; }
.ki.ki-mouse:before{ content: "\e960"; }
.ki.ki-mouse-alt:before{ content: "\e961"; }
.ki.ki-mouse-left-button:before{ content: "\e962"; }
.ki.ki-mouse-right-button:before{ content: "\e963"; }
.ki.ki-move-bl:before{ content: "\e964"; }
.ki.ki-move-br:before{ content: "\e965"; }
.ki.ki-move-bt:before{ content: "\e966"; }
.ki.ki-move-bt2:before{ content: "\e967"; }
.ki.ki-move-lb:before{ content: "\e968"; }
.ki.ki-move-lr:before{ content: "\e969"; }
.ki.ki-move-lr2:before{ content: "\e96a"; }
.ki.ki-move-lt:before{ content: "\e96b"; }
.ki.ki-move-rb:before{ content: "\e96c"; }
.ki.ki-move-rl:before{ content: "\e96d"; }
.ki.ki-move-rl2:before{ content: "\e96e"; }
.ki.ki-move-rt:before{ content: "\e96f"; }
.ki.ki-move-tb:before{ content: "\e970"; }
.ki.ki-move-tb2:before{ content: "\e971"; }
.ki.ki-move-tl:before{ content: "\e972"; }
.ki.ki-move-tr:before{ content: "\e973"; }
.ki.ki-movie:before{ content: "\e974"; }
.ki.ki-music:before{ content: "\e975"; }
.ki.ki-music-off:before{ content: "\e976"; }
.ki.ki-network:before{ content: "\e977"; }
.ki.ki-off:before{ content: "\e978"; }
.ki.ki-paint-brush:before{ content: "\e979"; }
.ki.ki-pause:before{ content: "\e97a"; }
.ki.ki-pencil:before{ content: "\e97b"; }
.ki.ki-player-four:before{ content: "\e97c"; }
.ki.ki-player-one:before{ content: "\e97d"; }
.ki.ki-player-three:before{ content: "\e97e"; }
.ki.ki-player-two:before{ content: "\e97f"; }
.ki.ki-plus:before{ content: "\e980"; }
.ki.ki-plus-alt:before{ content: "\e981"; }
.ki.ki-plus-circle:before{ content: "\e982"; }
.ki.ki-podium:before{ content: "\e983"; }
.ki.ki-podium-alt:before{ content: "\e984"; }
.ki.ki-pointer:before{ content: "\e985"; }
.ki.ki-question:before{ content: "\e986"; }
.ki.ki-question-circle:before{ content: "\e987"; }
.ki.ki-question-circle-alt:before{ content: "\e988"; }
.ki.ki-reduce:before{ content: "\e989"; }
.ki.ki-reload:before{ content: "\e98a"; }
.ki.ki-robot:before{ content: "\e98b"; }
.ki.ki-rows:before{ content: "\e98c"; }
.ki.ki-save:before{ content: "\e98d"; }
.ki.ki-search:before{ content: "\e98e"; }
.ki.ki-search-equal:before{ content: "\e98f"; }
.ki.ki-search-minus:before{ content: "\e990"; }
.ki.ki-search-plus:before{ content: "\e991"; }
.ki.ki-shopping-cart:before{ content: "\e992"; }
.ki.ki-shopping-case:before{ content: "\e993"; }
.ki.ki-signal-high:before{ content: "\e994"; }
.ki.ki-signal-low:before{ content: "\e995"; }
.ki.ki-signal-medium:before{ content: "\e996"; }
.ki.ki-sign-in:before{ content: "\e997"; }
.ki.ki-sign-in-alt:before{ content: "\e998"; }
.ki.ki-sign-out:before{ content: "\e999"; }
.ki.ki-sign-out-alt:before{ content: "\e99a"; }
.ki.ki-smartphone:before{ content: "\e99b"; }
.ki.ki-sort-horizontal:before{ content: "\e99c"; }
.ki.ki-sort-vertical:before{ content: "\e99d"; }
.ki.ki-star:before{ content: "\e99e"; }
.ki.ki-step-backward:before{ content: "\e99f"; }
.ki.ki-step-forward:before{ content: "\e9a0"; }
.ki.ki-stick:before{ content: "\e9a1"; }
.ki.ki-stick-left-side:before{ content: "\e9a2"; }
.ki.ki-stick-left-top:before{ content: "\e9a3"; }
.ki.ki-stick-move-bl:before{ content: "\e9a4"; }
.ki.ki-stick-move-br:before{ content: "\e9a5"; }
.ki.ki-stick-move-bt:before{ content: "\e9a6"; }
.ki.ki-stick-move-bt2:before{ content: "\e9a7"; }
.ki.ki-stick-move-lb:before{ content: "\e9a8"; }
.ki.ki-stick-move-lr:before{ content: "\e9a9"; }
.ki.ki-stick-move-lr2:before{ content: "\e9aa"; }
.ki.ki-stick-move-lt:before{ content: "\e9ab"; }
.ki.ki-stick-move-rb:before{ content: "\e9ac"; }
.ki.ki-stick-move-rl:before{ content: "\e9ad"; }
.ki.ki-stick-move-rl2:before{ content: "\e9ae"; }
.ki.ki-stick-move-rt:before{ content: "\e9af"; }
.ki.ki-stick-move-tb:before{ content: "\e9b0"; }
.ki.ki-stick-move-tb2:before{ content: "\e9b1"; }
.ki.ki-stick-move-tl:before{ content: "\e9b2"; }
.ki.ki-stick-move-tr:before{ content: "\e9b3"; }
.ki.ki-stick-right-side:before{ content: "\e9b4"; }
.ki.ki-stick-right-top:before{ content: "\e9b5"; }
.ki.ki-stick-side:before{ content: "\e9b6"; }
.ki.ki-stick-tilt-left:before{ content: "\e9b7"; }
.ki.ki-stick-tilt-right:before{ content: "\e9b8"; }
.ki.ki-stop:before{ content: "\e9b9"; }
.ki.ki-tablet:before{ content: "\e9ba"; }
.ki.ki-times:before{ content: "\e9bb"; }
.ki.ki-top:before{ content: "\e9bc"; }
.ki.ki-trash:before{ content: "\e9bd"; }
.ki.ki-trash-alt:before{ content: "\e9be"; }
.ki.ki-unlock:before{ content: "\e9bf"; }
.ki.ki-upload:before{ content: "\e9c0"; }
.ki.ki-user:before{ content: "\e9c1"; }
.ki.ki-users:before{ content: "\e9c2"; }
.ki.ki-users-alt:before{ content: "\e9c3"; }
.ki.ki-volume-off:before{ content: "\e9c4"; }
.ki.ki-volume-on:before{ content: "\e9c5"; }
.ki.ki-wrench:before{ content: "\e9c6"; }
';

$stuff = explode("\n", $stuff);
$array = array();
foreach($stuff AS $code){
	$key = preg_replace("%\.ki\.ki\-(.*)?\:before(.*)%", "$1", $code);
	$c = preg_replace("%(?:.*)content\: \"(.*)?\"\;\s\}%", "$1", $code);
	
	$array[$key] = $c;
}

 $json = file_get_contents("icomoon.json");
 $json = json_decode($json, true);
 
 $i = 0; $output = array();
 foreach($json["icons"] AS $icon){
	$class = "ki ki-".$icon["properties"]["name"];
	
	$output[] = "\t".'"'.$icon["properties"]["name"].'": {
	'."\t\t".'"code":	"'.str_replace("\r", "", $array[$icon["properties"]["name"]]).'",
	'."\t\t".'"class": "ki-'.$icon["properties"]["name"].'",
	'."\t\t".'"group": ""
'."\t".'},';
	$i++;
 }
 
echo "<pre>".implode("<br />", $output)."</pre>";
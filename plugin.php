<?php

class MHerbstInsertThumbPlugin extends KokenPlugin {

	function __construct() {
		$this->register_shortcode('hochkant_thumbs', 'render');
	}

	function render($attributes) 	{
		$query = $_SERVER['QUERY_STRING'];
 /*   	$handle = fopen("/test.log","a");
    	fwrite($handle, ">>".$query."<<\n");
    	fwrite($handle, "StriPos:".stripos($query, "/text/slug:")."--".stripos($query, "/type:essay/")."\n");
    	fwrite($handle, "Stripos2:".stripos($query, "/type:page/"));
  */  	
    	if(!empty($attributes['anzahl'])){
    		$width = 100/$attributes['anzahl'];
    	}
    	else{
    		$width = 50;
    	}
    	
    	$style = 'style="float:left;width:'.$width.'%;"';

		return <<<HTML
		<!-- koken:img {$size} {$preset} {$width} {$height} {$lazy} {$crop} add: {$addStyle} -->
<div class="k-content" {$style}>
	<koken:load source="content" filter:id="{$attributes['id']}">
		<figure class="k-content-embed">
			<koken:img  />
		</figure>
	</koken:load>
</div>
HTML;
	}
}

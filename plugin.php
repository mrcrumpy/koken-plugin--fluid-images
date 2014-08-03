<?php

class MHerbstInsertThumbPlugin extends KokenPlugin {

	function __construct() {
		$this->register_shortcode('mherbst_thumbs', 'render');
	}

	function render($attributes) 	{
		$query = $_SERVER['QUERY_STRING'];
 /*   	$handle = fopen("/test.log","a");
    	fwrite($handle, ">>".$query."<<\n");
    	fwrite($handle, "StriPos:".stripos($query, "/text/slug:")."--".stripos($query, "/type:essay/")."\n");
    	fwrite($handle, "Stripos2:".stripos($query, "/type:page/"));
  */  	

		if ((stripos($query, "/text/slug:") === false && !$this->data->show_in_index) && stripos($query, "/type:page/") === false)
			return "";

		$class = $attributes['class'];
		if ($class === "") {
			$class = $this->data->default_css;
		}
			
		return <<<HTML
		<!-- koken:img {$size} {$preset} {$width} {$height} {$lazy} {$crop} add: {$addStyle} -->
<div class="k-content {$class}">
	<koken:load source="content" filter:id="{$attributes['id']}">
		<figure class="k-content-embed">
			{$linkbegin}<koken:img  />{$linkend}
			{$caption}
		</figure>
	</koken:load>
</div>
HTML;
	}
}

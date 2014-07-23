<?php

class Hochkant extends KokenPlugin {

    public function __construct() {
        $this->require_setup = true;
        $this->register_filter('site.output', 'render');
      }

      public function render($content) {
        console.log($content);
        return $content;
      }

}
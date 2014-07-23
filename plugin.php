<?php

class Hochkant extends KokenPlugin {

    public function __construct() {
        $this->require_setup = true;
        $this->register_filter('api.content', 'render');
      }

      public function render() {
        console.log('test');
      }

}
<?php

class Hochkant extends KokenPlugin {

    public function __construct() {
        $this->require_setup = true;
        $this->register_hook('before_closing_head', 'render');
      }

      public function render() {
        alert('test');
      }

}
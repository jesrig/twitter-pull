<?php

namespace Drupal\twitter_pull\Controller;

class Twitter_PullController {
  public function content() {
    $array = array('apple','orange', 'pear');
    //dpm($array);
    //kint($array);
    return array('#markup'=> 'hello world!');
  }
}
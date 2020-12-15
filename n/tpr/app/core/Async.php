<?php

use Spatie\Async\Pool;

class Async {

  private $pool;

  public function __construct() {
    $this->pool = Pool::create();
	}

}

?>

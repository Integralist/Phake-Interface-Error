<?php

require "my_class.php";

class TestMyClassWorks extends PHPUnit_Framework_TestCase {
  public function testMyClassWorks() {
    Phake::mock('MyClass');
  }
}
?>

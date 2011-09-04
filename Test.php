<?php


require_once 'PHPUnit/Autoload.php';

class ArrayTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @Test
   */
  public function testNewArrayIsEmpty()
  {
    $fixture = array();

    $this->assertEquals(0, count($fixture));
  }

  /**
   * @Test
   */
  public function testArrayContainAnElement()
  {
    $fixture = array();

    $fixture[] = 'Element';

    $this->assertEquals(1, count($fixture));
  }
}

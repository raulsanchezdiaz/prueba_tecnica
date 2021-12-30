<?php

namespace Drupal\calculadora\test\Unit;


use Drupal\calculadora\Controller\CalculadoraController;
use Drupal\Tests\UnitTestCase;


/**
 * @coversDefaultClass \Drupal\calculadora\Controller\CalculadoraController
 * @package \Drupal\calculadora\test\Unit\CalculadoraControllerTest
 */
class CalculadoraControllerTest extends UnitTestCase {

  /**
   * Chequear calculo.
   *
   */
  public function testExcOperacionAdd() {
    $calculadora = new CalculadoraController();
    $data = $calculadora->excOperacion('add', 4, 4);
    $this->assertEquals($data, 8);
  }

  public function testExcOperacionDif() {
    $calculadora = new CalculadoraController();
    $data = $calculadora->excOperacion('dif', 4, 4);
    $this->assertEquals($data, 0);
  }

  public function testExcOperacionMul() {
    $calculadora = new CalculadoraController();
    $data = $calculadora->excOperacion('mul', 4, 4);
    $this->assertEquals($data, 16);
  }

  public function testExcOperacionDiv() {
    $calculadora = new CalculadoraController();
    $data = $calculadora->excOperacion('div', 4, 4);
    $this->assertEquals($data, 1);
  }


}

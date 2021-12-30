<?php

/**
 * @file
 * Contains \Drupal\calculadora\Controller.
 */

namespace Drupal\calculadora\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;



/**
 * Class CalculadoraController.
 *
 * @package Drupal\calculadora\Controller
 */
class CalculadoraController extends ControllerBase
{
  public function excOperacion($operation, $operatorA, $operatorB)
  {

    try {
      $result = 0;
      switch ($operation) {
        case 'add':
          $result = $operatorA + $operatorB;
          break;
        case 'dif':
          $result = $operatorA - $operatorB;
          break;
        case 'mul':
          $result = $operatorA * $operatorB;
          break;
        case 'div':
          $result = $operatorA / $operatorB;
          break;
      }
    } catch (\Exception $e) {
      $result = $e->getMessage();
    }
    dump('operations '.$operatorA.' '.$operatorB.' '.$operation);
    return new Response($result);
  }

}


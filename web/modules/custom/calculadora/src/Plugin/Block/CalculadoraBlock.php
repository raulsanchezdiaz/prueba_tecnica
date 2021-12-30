<?php

namespace Drupal\calculadora\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
 * Provides a 'find user' block.
 *
 * @Block(
 *   id = "calculadora",
 *   admin_label = @Translation("Calculadora"),
 * )
 */
class CalculadoraBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      ] + parent::defaultConfiguration();
  }
  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return 0;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm("\Drupal\\calculadora\Form\CalculadoraForm");

    return [
      'theme'=>'calculadora',
      'form'=>$form,
    ];
  }

}


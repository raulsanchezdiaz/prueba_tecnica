<?php

namespace Drupal\calculadora\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ClimaForm.
 */
class CalculadoraForm extends FormBase{

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'calculadora_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['OperatorA'] = [
            '#type' => 'number',
            '#title' => $this->t('Operador A'),
            '#weight' => '0',
            '#required' => true,
            '#max_length' => 20,

        ];
        $form['OperatorB'] = [
          '#type' => 'number',
          '#title' => $this->t('Operador B'),
          '#weight' => '0',
          '#required' => true,
          '#max_length' => 20,

        ];

      $form['actions']['#type'] = 'actions';
      $form['actions']['add'] = [
        '#id'=>'add',
        '#type' => 'submit',
        '#value' => $this->t("+")
      ];
      $form['actions']['dif'] = [
        '#id'=>'dif',
        '#type' => 'submit',
        '#value' => $this->t("-")
      ];
      $form['actions']['mul'] = [
        '#id'=>'mul',
        '#type' => 'submit',
        '#value' => $this->t("*")
      ];
      $form['actions']['div'] = [
        '#id'=>'div',
        '#type' => 'submit',
        '#value' => $this->t("/")
      ];

      return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        parent::validateForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
      $triggerdElement = $form_state->getTriggeringElement();
      $htmlIdofTriggeredElement = $triggerdElement['#id'];
      return $form_state->setRedirect('calculadora.get.value',['operation'=>$htmlIdofTriggeredElement,'operatorA'=>$form_state->getValue('OperatorA'),'operatorB'=>$form_state->getValue('OperatorB')]);
    }




}

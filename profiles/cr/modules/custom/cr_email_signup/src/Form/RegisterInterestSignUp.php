<?php

namespace Drupal\cr_email_signup\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Concrete implementation of Step One.
 */
class RegisterInterestSignUp extends SignUp {

  /**
   * Get the Form Identifier.
   */
  public function getFormId() {
    return 'cr_email_signup_register_interest_form';
  }

  /**
   * {@inheritdoc}
   */
  public function getQueueName() {
    return 'esu_register_interest';
  }

  protected function EsuContentFields() {
    $form['EventInterest'] = [
      '#type' => 'checkbox',
      '#title' => $this->t("Tick this box to sign up to newsletter and kept informed about what we're up to"),
    ];
    return $form;
  }
}

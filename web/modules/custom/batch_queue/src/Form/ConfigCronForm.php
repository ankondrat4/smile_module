<?php
namespace Drupal\batch_queue\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ConfigCronForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_config_cron';
  }

  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    return 'batch_queue.resource';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $site_config = \Drupal::config('batch_queue.resource');

    $form['help'] = [
      '#markup' => $this->t('This form for config parametres for
      cron job UnpublishNodeQueue.'),
    ];

    $form['period'] = [
      '#type' => 'number',
      '#title' => $this->t('Period (how many days ago should be lastly
      changed node to recognize as requested one)'),
      '#default_value' => $site_config->get('period'),
    ];

    $form['items'] = [
      '#type' => 'number',
      '#title' => $this->t('Items to create (how many items should be
      created on each cron run)'),
      '#default_value' => $site_config->get('items'),
    ];

    $form['disabled']['active'] = [
      '#type' => 'radios',
      '#title' => $this->t('Disabled (define if on cron run we should
      find nodes or just postpone any actions until user will enable it again)'),
      '#options' => ['true' => $this->t('Yes'), 'false' => $this->t('No')],
      '#default_value' => $site_config->get('disabled'),
    ];

    $form['unpublished_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Unpublished label'),
      '#default_value' => $site_config->get('unpublished_label'),
    ];

    $form['actions'] = ['#type' => 'actions'];
    $form['actions']['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save configuration'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $name = $form_state->getValue('name');
    $email = $form_state->getValue('email');
    if ($form_state->getValue('period') < 180) {
      $form_state->setErrorByName('period', $this->t('Minimum value is 180.'));
    }
    if ($form_state->getValue('items') < 5 || $form_state->getValue('items') > 25) {
      $form_state->setErrorByName('items', $this->t('Count items should be
      more than 5 and less than 25.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $site_config = \Drupal::configFactory()->getEditable('batch_queue.resource');
    $site_config -> set('period',  $form_state->getValue('period'))
      -> set('items',  $form_state->getValue('items'))
      -> set('unpublished_label',  $form_state->getValue('unpublished_label'));
    $status = $form_state->getValue('disabled');
    $site_config -> set('disabled',  $status['active']);

    parent::submitForm($form, $form_state);
  }

}

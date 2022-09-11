<?php
/**
 * @file
 * Contains Drupal\welcome\Form\MessagesForm.
 */
namespace Drupal\event_management\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class EventManagementForm extends ConfigFormBase {

  /**
   * @return string[]
   */
  protected function getEditableConfigNames(): array
  {
    return [
      'event_management.adminsettings',
    ];
  }

  /**
   * @return string
   */
  public function getFormId(): string
  {
    return 'event_management_config_form';
  }

  /**
   * @param array $form
   * @param FormStateInterface $form_state
   *
   * @return array
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config('event_management.adminsettings');

    $form['toggle_past_event'] = [
      '#type' => 'select',
      '#title' => $this->t('show past events'),
      '#default_value' => $config->get('toggle_past_event'),
      '#options' => [
        1 => 'show',
        0 => 'hide'
      ]
    ];

    $form['number_of_events'] = [
      '#type' => 'number',
      '#title' => $this->t('number of events'),
      '#default_value' => $config->get('number_of_events')
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * @param array $form
   * @param FormStateInterface $form_state
   */
  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    $numberOfEvents = $form_state->getValue('number_of_events');

    if ($numberOfEvents < 1) {
      $form_state->setErrorByName('number_of_events', 'The number must be greater than 0');
    }

    parent::validateForm($form, $form_state);
  }

  /**
   * @param array $form
   * @param FormStateInterface $form_state
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    parent::submitForm($form, $form_state);
    $config = $this->config('event_management.adminsettings');
    $skip = ['submit', 'form_build_id', 'form_token', 'form_id', 'op'];
    foreach ($form_state->getValues() as $key => $value) {
      if (!in_array($key, $skip)) {
        $config->set($key, $value);
      }
    }
    $config->save();
    $this->storeUserLog();
  }

  private function storeUserLog()
  {
    $currentUser = \Drupal::currentUser();
    $content = \Drupal::database()->insert('users_event_log');
    $content->fields(['uid', 'created_date']);
    $content->values([$currentUser->id(), date('Y-m-d h:i')]);
    $content->execute();
  }

}

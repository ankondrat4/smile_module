<?php
namespace Drupal\smile_entity_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @Block(
 *   id = "smile_entity_block",
 *   admin_label = @Translation("Smile Entity Block")
 *)
 */
class EntityBlock extends BlockBase {

  public function build() {
    $config = $this->getConfiguration();


    $query = \Drupal::entityQuery('smile_entity');
    $entity_ids = $query->sort('created', 'DESC')
      ->range(0, $config['items'])
      ->execute();
    $entity_type_manager = \Drupal::entityTypeManager();
    $entity_view_builder = $entity_type_manager->getViewBuilder('smile_entity');

    foreach ($entity_ids as $id) {
      $node = $entity_type_manager->getStorage('smile_entity')->load($id);
      $list['entity'][$node->id()] = $entity_view_builder->view($node, 'teaser');
    }

    return [
      '#theme' => 'smile_entity_block_theme',
      '#list' => $list,
      '#attached'=>[
        'library'=>['smile_entity_block/table']
      ],
    ];
  }

  /**
   *   Cache age life time. Disable block cache.
   */
  public function getCacheMaxAge() {
    return 0;
  }


  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();

    $form['items_count'] = [
      '#type' => 'number',
      '#title' => $this->t('Count of entitiesg:'),
      '#default_value' => $config['items'] ?? '',
    ];

    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    //setting value for items in config
    $this->setConfigurationValue('items', $form_state->getValue('items_count'));
  }

}

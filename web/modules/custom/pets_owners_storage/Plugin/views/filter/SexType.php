<?php

namespace Drupal\pets_owners_storage\Plugin\views\filter;

use Drupal\views\Plugin\views\filter\InOperator;

/**
 * Exposes filter for sex pets.
 *
 * @ViewsFilter("sex")
 */
class SexType extends InOperator {

  /**
   * {@inheritdoc}
   */
  public function getValueOptions() {
    // Array keys are used to compare with the table field values.
    return [
      'mr' => 'mr',
      'mrs' => 'mrs',
      'ms' => 'ms',
    ];
  }


}

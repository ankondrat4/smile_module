<?php

namespace Drupal\user_service;

use Drupal\Core\Session\AccountProxy;
use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class CurrentUserDecorator extends AccountProxy {

  /**
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected AccountProxyInterface $originalService;

  /**
   * AccountProxy constructor.
   *
   * @param \Symfony\Contracts\EventDispatcher\EventDispatcherInterface $eventDispatcher
   *   Event dispatcher.
   */
  public function __construct(AccountProxyInterface $current_user, EventDispatcherInterface $eventDispatcher) {
    $this->originalService = $current_user;
    parent::__construct($eventDispatcher);
  }

  /**
   * Override.
   * @return string
   */
  public function getDisplayName(): string {
    $email = $this->getAccount()->getEmail();
    return "Email: $email";
  }
}

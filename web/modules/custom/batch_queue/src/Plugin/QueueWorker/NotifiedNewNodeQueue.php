<?php

namespace Drupal\batch_queue\Plugin\QueueWorker;

use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;

/**
 * A worker which logs into “DB logs'' information about users that should be
 * notified during any node creation during Queue item processing.
 *
 * @QueueWorker(
 *   id = "NotifiedNewNodeQueue",
 *   title = @Translation("Worker with logs creation nodes"),
 *   cron = {"time" = 10}
 * )
 */
class NotifiedNewNodeQueue extends QueueWorkerBase {

  /**
   * The logger.
   *
   * @var \Psr\Log\LoggerInterface
   */
  protected $logger;

  /**
   * NotifiedNewNodeQueue constructor.
   *
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $logger
   *   The logger service the instance should use.
   */
  public function __construct(LoggerChannelFactoryInterface $logger) {
    $this->logger = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public function processItem($data) {
    if (!empty($data)) {
      $this->logger->get('batch_queue')->info('User @username should be notified about new node @node_title[@node_id]', [
        '@username' => $data->author,
        '@node_title' => $data->title,
        '@node_id' => $data->nid,
      ]);


 /*
      $node_storage = \Drupal::entityTypeManager()->getStorage('node');
      if ($node = $node_storage->load($data)) {
        if ($node->isPublished()) {
          $node->setUnpublished(TRUE);
          //$node->setPublished(TRUE);
          $node->save();
        }
      }*/
    }
  }



}

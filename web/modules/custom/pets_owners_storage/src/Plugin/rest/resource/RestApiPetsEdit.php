<?php

namespace Drupal\pets_owners_storage\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * @RestResource(
 *   id = "restapipetsedit",
 *   label = @Translation("Rest API for edit record from PetsOwnersStorage"),
 *   uri_paths = {
 *     "canonical" = "/api/v1/edit-pets/{id}"
 *   }
 * )
 */
class RestApiPetsEdit extends ResourceBase {

  /**
   * Responds to EDIT specific record (by row Primary Key - ID).
   */
  public function patch($id, Request $request) {
    $count = \Drupal::database()->select('pets_owners_storage')
      ->condition('id', $id)
      ->countQuery()
      ->execute()
      ->fetchField();




    if ($count != 0) {
      $response['message'] = 'Record with provided ID update.';
      return new ResourceResponse($response, 200);
    }
    else {
      $response['message'] = 'Record with provided ID is not found.';
      return new ResourceResponse($response, 400);
    }
  }

}

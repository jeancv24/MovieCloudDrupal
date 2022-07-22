<?php

/**
 * @file
 * RandomPuppyController
 */

namespace Drupal\rand_puppy\Controller;

use Drupal\Core\Controller\ControllerBase;

class RandomPuppyController extends ControllerBase
{
  public function getRandomPuppy()
  {
    $urlApi = 'https://place-puppy.com/';

    $html = '';

    for ($i = 0; $i < 5; $i++) {
      $puppy_width = rand(100, 500);
      $puppy_height = rand(100, 400);
      $puppyUrl = $urlApi . $puppy_width . 'x' . $puppy_height;

      $html .= "<div class='col-12 col-sm-6 col-md-4 col-lg-3'>
        <img height='200' width='200' class='img-fluid rounded img-thumbnail' alt='image of the puppy' src='$puppyUrl' />
      </div>";
    }

    return [
      '#type' => 'markup',
      '#markup' => $this->t('
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-flex flex-wrap">
                ' . $html . '
              </div>
            </div>
          </div>
        </div>
      '),
    ];
  }
}
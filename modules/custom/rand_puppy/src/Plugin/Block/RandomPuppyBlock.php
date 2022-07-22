<?php

/**
 * @file
 * RandomPuppyBlock.
 */

namespace Drupal\rand_puppy\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'RandomPuppyBlock' block.
 *
 * @Block(
 *  id = "random_puppy_block",
 *  admin_label = @Translation("Random Puppy block"),
 *  category = @Translation("Random Puppy"),
 * )
 */

class RandomPuppyBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $urlApi = 'https://place-puppy.com/';

    $html = '';

    $puppy_width = rand(100, 500);
    $puppy_height = rand(100, 500);
    $puppyUrl = $urlApi . $puppy_width . 'x' . $puppy_height;

    $html .= "<div class='col-12 col-sm-6 col-md-4 col-lg-3'>
    <img class='rounded' alt='image of the puppy' src='$puppyUrl' />
    </div>";

    return [
      '#type' => 'markup',
      '#markup' => $this->t('
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="flex-wrap">
                ' . $html . '
                <a href="/rand-puppy" title="Get to know the puppies">
                    <img height="80" width="80" src="https://proxy.duckduckgo.com/iu/?u=https://cdn4.iconfinder.com/data/icons/unicons/88/objects-feet-512.png" alt="puppy" />
                    Click to see more puppies
                </a>
              </div>
            </div>
          </div>
        </div>
      '),
    ];
  }
}


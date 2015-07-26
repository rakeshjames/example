<?php

namespace Drupal\example\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'Example' block.
 *
 * @Block(
 *   id = "example_block",
 *   admin_label = @Translation("Example Block"),
 * )
 */
class ExampleBlock extends BlockBase {

    public function build(){
        return array(
          '#markup' => $this->t('Hello World!'),
        );
    }

    public function access_block(AccountInterface $account) {
        return $account->hasPermission("access content");
    }
}

<?php
/**
 * Provides a 'Gigya RaaS Login' Block
 *
 * @Block(
 *   id = "gigya_rass_login",
 *   admin_label = @Translation("Gigya RaaS Login"),
 *   category = @Translation("Gigya")
 * )
 */

namespace Drupal\gigya\Plugin\Block;

use Drupal\Core\Block\BlockBase;


class GigyaRaasLogin extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['block'] = array(
      '#theme' => 'gigya_raas_login_block',
      '#showDiv' => \Drupal::currentUser()->isAnonymous()
    );
    $this->setConfigurationValue('label_display', 'hidden');

    return $build;
  }
}
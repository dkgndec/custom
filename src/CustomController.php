<?php
/**
 * @file
 * Contains \Drupal\custom\Controller\CustomController.
 */
namespace Drupal\custom\Controller;
use Drupal\Core\Controller\ControllerBase;

class CustomController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => t('this is davinder first module'),
        );
    }
}
?>


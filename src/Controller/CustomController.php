<?php
/**
 * @file
 * Contains \Drupal\custom\Controller\CustomController.
 */
namespace Drupal\custom\Controller;
use Drupal\Core\Controller\ControllerBase;

class CustomController extends ControllerBase {
    public function content() {
        $markup = t('this is davinder first module') . $this->snehi();
        return array(
            '#type' => 'markup',
            '#markup' =>  $markup ,
            '#title' => $this->t('Argument Information'),
        );

    }
    public function snehi() {
        $mark = "";
        for($i=1;$i<=10;$i++)
        {
            $mark .= '<h2>'.$this->t('Heading '.$i).'</h2>';
            $mark .= '<p>This is the descriptin '.$i.'</p>';
        }
        return $mark;
    }
}
?>


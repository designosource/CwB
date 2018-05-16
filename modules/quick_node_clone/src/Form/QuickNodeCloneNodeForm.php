<?php

namespace Drupal\quick_node_clone\Form;

use Drupal\node\NodeForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Quick Node Clone edit forms. We can override most of
 * the node form from here! Hooray!
 */
class QuickNodeCloneNodeForm extends NodeForm {

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $element = parent::actions($form, $form_state);

    // Brand the Publish / Unpublish buttons but first check if they are still there.
    $clone_string = t('New Clone: ');
    if (!empty($element['publish']['#value'])) {
      $element['publish']['#value'] = $clone_string . $element['publish']['#value'];
    }
    if (!empty($element['unpublish']['#value'])) {
      $element['unpublish']['#value'] = $clone_string . $element['unpublish']['#value'];
    }

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $node = $this->entity;
    $insert = $node->isNew();
    $node->save();
    $storage = \Drupal::service('entity_type.manager')->getStorage('node');

    // Get the names of the base tables.
    $base_table_names = [];
    $base_table_names[] = $storage->getBaseTable();
    $base_table_names[] = $storage->getDataTable();
    // (Note that revision base tables don't have the bundle.)

    $table_mapping = \Drupal::service('entity_type.manager')->getStorage('node')->getTableMapping();

    // Get the names of the field tables for fields on the service node type.
    $field_table_names = [];
    $field_table_names[] = "node__body";
    $field_table_names[] = "node_revision__body";
    $field_table_names[] = "node__field_taxonomy_location";
    $field_table_names[] = "node_revision__field_taxonomy_location";
    $field_table_names[] = "node__field_post_tags";
    $field_table_names[] = "node_revision__field_post_tags";

    $field_removal_names = [];
    $field_removal_names = [
      "node__field_comments",
      "node_revision__field_comments"
    ];

    $field_move_names=[
      "node__field_header_image" => "node__field_grid_image",
      "node_revision__field_header_image" => "node_revision__field_grid_image"
    ];


    foreach ($base_table_names as $table_name) {
      $query = \Drupal\Core\Database\Database::getConnection('default')
      ->update($table_name)
      ->fields(['type' => 'public_story'])
      ->condition('type', 'professional_story', 'IN')
      ->condition('nid', $node->id(), 'IN')
      ->execute();
    }

    foreach ($field_table_names as $table_name) {
      $query = \Drupal\Core\Database\Database::getConnection('default')
      ->update($table_name)
      ->fields(['bundle' => 'public_story'])
      ->condition('bundle', 'professional_story', 'IN')
      ->condition('entity_id', $node->id(), 'IN')
      ->execute();
    }

    foreach($field_move_names as $key => $value){
    //Move the image to the correct column;
    $connection = \Drupal\Core\Database\Database::getConnection('default');
    // Build the SELECT query.
    $query = $connection->select($key,'n')->fields('n')->condition('entity_id', $node->id(), 'IN');
    // Perform the insert.
    $connection->insert($value)
    ->from($query)
  	->execute();
  }

    $query = \Drupal\Core\Database\Database::getConnection('default')
    ->update('url_alias')
    ->fields(['alias' => '/public_story/'.$node->getTitle()])
    ->condition('source', '/node/'.$node->id(), 'IN')
    ->execute();


    $node_link = $node->link($this->t('View'));

    $context = array('@type' => $node->getType(), '%title' => $node->label(), 'link' => $node_link);
    $t_args = array('@type' => node_get_type_label($node), '%title' => $node->label());


    if ($insert) {
      $this->logger('content')->notice('@type: added %title (clone).', $context);
      drupal_set_message(t('@type %title (clone) has been created.', $t_args));
    }

    if ($node->id()) {
      $form_state->setValue('nid', $node->id());
      $form_state->set('nid', $node->id());
      if ($node->access('view')) {
        $form_state->setRedirect(
          'entity.node.canonical',
          array('node' => $node->id())
        );
      }
      else {
        $form_state->setRedirect('<front>');
      }

    }
    else {
      // In the unlikely case something went wrong on save, the node will be
      // rebuilt and node form redisplayed the same way as in preview.
      drupal_set_message(t('The cloned post could not be saved.'), 'error');
      $form_state->setRebuild();
    }
  }

}

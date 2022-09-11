<?php

namespace Drupal\event_management\Controller;


use Drupal\node\Entity\Node;
use Drupal\Core\Controller\ControllerBase;

class EventManagementController extends ControllerBase
{

  public function listPublishedEvents()
  {
    $config = \Drupal::config('event_management.adminsettings');
    $num = $config->get('number_of_events');

    $query = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'event');

    if ($config->get('toggle_past_event') == 0) {
      $query = $query->condition('field_end_date', strtotime(date('Y-m-d')), '>');
    }

    $data = $query->range(0, $num)->execute();
    $events = Node::loadMultiple($data);
    $arrayOfEvents = [];
    foreach ($events as $event) {
      $arrayOfEvents[] = [
        'id' => $event->id(),
        'title' => $event->get('title')->getValue()[0]['value']
      ];
    }
    return [
      "#theme" => "events_list_plublished",
      "#data" => $arrayOfEvents
    ];
  }

}

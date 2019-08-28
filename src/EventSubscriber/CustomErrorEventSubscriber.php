<?php

namespace Drupal\respond_40x_error_code\EventSubscriber;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Event Subscriber MyEventSubscriber.
 */
class CustomErrorEventSubscriber implements EventSubscriberInterface {

  /**
   * Custom Event Handler to match against site's 403 and 404 settings.
   */
  public function onRespond(FilterResponseEvent $event) {
    $request = $event->getRequest();
    $response = $event->getResponse();

    $siteSettings = \Drupal::config('system.site');
    $site403 = $siteSettings->get('page.403');
    $site404 = $siteSettings->get('page.404');

    if (strpos($site403, '/node/') !== FALSE) {
      $site403aliased = \Drupal::service('path.alias_manager')->getAliasByPath($site403);
    }
    if (strpos($site404, '/node/') !== FALSE) {
      $site404aliased = \Drupal::service('path.alias_manager')->getAliasByPath($site404);
    }

    if ($request->attributes->get('_route') == "entity.node.canonical") {
      if ($request->getPathInfo() == $site403 || $request->getPathInfo() == $site403aliased) {
        $response->setStatusCode(403);
      }
      if ($request->getPathInfo() == $site404 || $request->getPathInfo() == $site404aliased) {
        $response->setStatusCode(404);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::RESPONSE][] = ['onRespond'];
    return $events;
  }

}

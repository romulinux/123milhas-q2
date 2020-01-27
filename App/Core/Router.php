<?php

namespace App\Core;

class Router
{
  /**
   * Holds the registered routes
   *
   * @var array $routes
   */
  private static $routes = [];

  /**
   * Register a new route
   *
   * @param $action string
   * @param \Closure $callback Called when current URL matches provided action
   */
  public static function route($action, $callback)
  {
      if (is_array($action)) {
        foreach ($action as $a) {
          $a = trim($a, '/');
          self::$routes[$a] = $callback;
        }
      } else {
        $action = trim($action, '/');
        self::$routes[$action] = $callback;
      }
  }

  /**
   * Dispatch the router
   *
   * @param $action string
   */
  public static function dispatch($action)
  {
      $action = trim($action, '/');
      if (!in_array($action, array_keys(self::$routes))) {
        $action = 'error';
      }
      $callback = self::$routes[$action];
  
      call_user_func($callback);
  }

  public static function get_routes () {
    return array_keys(self::$routes);
  }
}

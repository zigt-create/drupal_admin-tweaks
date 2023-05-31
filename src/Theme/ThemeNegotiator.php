<?php

namespace Drupal\admin_tweaks\Theme;

use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Drupal\Core\Routing\RouteMatchInterface;

/**
 * Class ThemeNegotiator.
 *
 * Override theme for specific routes.
 */
class ThemeNegotiator implements ThemeNegotiatorInterface {

  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    $possible_routes = [
      'user.login',
      'user.pass',
      'user.register',
      'user.reset',
      'user.reset.login',
      'user.reset.form',
      // Email TFA.
      'email_tfa.verifiy',
      // TFA module.
      'tfa.entry',
    ];
    return (in_array($route_match->getRouteName(), $possible_routes));
  }

  /**
   * {@inheritdoc}
   */
  public function determineActiveTheme(RouteMatchInterface $route_match) {
    // Here you return the actual theme name.
    return 'logintheme';
  }

}

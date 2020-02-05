<?php

namespace Drupal\admin_tweaks\Theme;

use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Drupal\Core\Routing\RouteMatchInterface;

/**
 * Class ThemeNegotiator.
 */
class ThemeNegotiator implements ThemeNegotiatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function applies(RouteMatchInterface $route_match)
    {
        // Use this theme on a certain route.
        // return $route_match->getRouteName() == 'example_route_name';

        // Or use this for more than one route:
        $possible_routes = array(
            'user.login',
            'user.pass',
            'user.register',
            'user.reset',
            'user.reset.login',
            'user.reset.form',
        );
        return (in_array($route_match->getRouteName(), $possible_routes));
    }

    /**
     * {@inheritdoc}
     */
    public function determineActiveTheme(RouteMatchInterface $route_match)
    {
        // Here you return the actual theme name.
        return 'logintheme';
    }
}

<?php

namespace ContainerSRBDHQy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JInbTTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._jInbTT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._jInbTT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'color' => ['privates', '.errored..service_locator._jInbTT.App\\Entity\\Color', NULL, 'Cannot autowire service ".service_locator._jInbTT": it references class "App\\Entity\\Color" but no such service exists.'],
        ], [
            'color' => 'App\\Entity\\Color',
        ]);
    }
}

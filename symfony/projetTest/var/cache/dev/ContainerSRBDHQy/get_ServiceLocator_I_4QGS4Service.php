<?php

namespace ContainerSRBDHQy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I_4QGS4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I.4QGS4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I.4QGS4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'colorRepository' => ['privates', 'App\\Repository\\ColorRepository', 'getColorRepositoryService', true],
        ], [
            'colorRepository' => 'App\\Repository\\ColorRepository',
        ]);
    }
}

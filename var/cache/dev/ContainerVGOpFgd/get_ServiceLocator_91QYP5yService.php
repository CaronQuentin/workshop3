<?php

namespace ContainerVGOpFgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_91QYP5yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.91QYP5y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.91QYP5y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'session' => ['privates', '.errored..service_locator.91QYP5y.Symfony\\Component\\HttpFoundation\\Session\\Session', NULL, 'Cannot autowire service ".service_locator.91QYP5y": it references class "Symfony\\Component\\HttpFoundation\\Session\\Session" but no such service exists.'],
        ], [
            'session' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
        ]);
    }
}

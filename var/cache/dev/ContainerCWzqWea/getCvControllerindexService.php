<?php

namespace ContainerCWzqWea;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCvControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lw26Ho2.App\Controller\CvController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lw26Ho2.App\\Controller\\CvController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'job' => ['privates', '.errored..service_locator.lw26Ho2.App\\Entity\\Job', NULL, 'Cannot autowire service ".service_locator.lw26Ho2": it needs an instance of "App\\Entity\\Job" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'job' => 'App\\Entity\\Job',
            'em' => '?',
        ]))->withContext('App\\Controller\\CvController::index()', $container);
    }
}

<?php

namespace ContainerCWzqWea;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobCrudControllerconfigureCrudService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GLGWHcU.App\Controller\Admin\JobCrudController::configureCrud()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GLGWHcU.App\\Controller\\Admin\\JobCrudController::configureCrud()'] = ($container->privates['.service_locator.GLGWHcU'] ?? $container->load('get_ServiceLocator_GLGWHcUService'))->withContext('App\\Controller\\Admin\\JobCrudController::configureCrud()', $container);
    }
}

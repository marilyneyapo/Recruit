<?php

namespace ContainerYcQJqFx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCrudControllerbatchDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PNgi4kB.App\Controller\Admin\UserCrudController::batchDelete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PNgi4kB.App\\Controller\\Admin\\UserCrudController::batchDelete()'] = ($container->privates['.service_locator.PNgi4kB'] ?? $container->load('get_ServiceLocator_PNgi4kBService'))->withContext('App\\Controller\\Admin\\UserCrudController::batchDelete()', $container);
    }
}

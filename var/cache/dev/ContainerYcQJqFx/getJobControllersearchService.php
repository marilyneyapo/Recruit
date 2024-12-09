<?php

namespace ContainerYcQJqFx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobControllersearchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.32KeI.R.App\Controller\JobController::search()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.32KeI.R.App\\Controller\\JobController::search()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'jobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
        ], [
            'jobRepository' => 'App\\Repository\\JobRepository',
        ]))->withContext('App\\Controller\\JobController::search()', $container);
    }
}

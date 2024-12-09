<?php

namespace ContainerYcQJqFx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Default_Middleware_TraceableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.bus.default.middleware.traceable' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\TraceableMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'TraceableMiddleware.php';

        return $container->privates['messenger.bus.default.middleware.traceable'] = new \Symfony\Component\Messenger\Middleware\TraceableMiddleware(($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), 'messenger.bus.default');
    }
}

<?php

namespace ContainerYcQJqFx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIconService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Icon' service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Icon
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Icon.php';

        $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon'] = function ($container) {
            return new \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Icon(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)));
        };

        return $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon']($container);
    }
}

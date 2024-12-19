<?php

namespace ContainerCWzqWea;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_Channel_BrowserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.channel.browser' shared service.
     *
     * @return \Symfony\Component\Notifier\Channel\BrowserChannel
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'ChannelInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'BrowserChannel.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'FlashMessage'.\DIRECTORY_SEPARATOR.'AbstractFlashMessageImportanceMapper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'FlashMessage'.\DIRECTORY_SEPARATOR.'FlashMessageImportanceMapperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'FlashMessage'.\DIRECTORY_SEPARATOR.'DefaultFlashMessageImportanceMapper.php';

        return $container->privates['notifier.channel.browser'] = new \Symfony\Component\Notifier\Channel\BrowserChannel(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\Notifier\FlashMessage\DefaultFlashMessageImportanceMapper([]));
    }
}

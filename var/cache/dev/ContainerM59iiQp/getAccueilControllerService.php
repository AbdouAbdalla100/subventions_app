<?php

namespace ContainerM59iiQp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccueilControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Frontend\AccueilController' shared autowired service.
     *
     * @return \App\Controller\Frontend\AccueilController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Frontend'.\DIRECTORY_SEPARATOR.'AccueilController.php';

        $container->services['App\\Controller\\Frontend\\AccueilController'] = $instance = new \App\Controller\Frontend\AccueilController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Frontend\\AccueilController', $container));

        return $instance;
    }
}

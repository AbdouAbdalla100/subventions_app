<?php

namespace ContainerM59iiQp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebpackEncore_EntrypointLookup_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'webpack_encore.entrypoint_lookup.cache_warmer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'EntrypointCacheWarmer.php';

        return $container->privates['webpack_encore.entrypoint_lookup.cache_warmer'] = new \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer(['_default' => (\dirname(__DIR__, 4).'/public/build/entrypoints.json')], ($container->targetDir.''.'/webpack_encore.cache.php'), ($container->privates['cache.webpack_encore'] ?? $container->getCache_WebpackEncoreService()));
    }
}

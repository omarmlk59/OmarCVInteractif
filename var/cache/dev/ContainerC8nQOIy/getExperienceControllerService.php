<?php

namespace ContainerC8nQOIy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExperienceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ExperienceController' shared autowired service.
     *
     * @return \App\Controller\ExperienceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ExperienceController.php';

        $container->services['App\\Controller\\ExperienceController'] = $instance = new \App\Controller\ExperienceController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ExperienceController', $container));

        return $instance;
    }
}

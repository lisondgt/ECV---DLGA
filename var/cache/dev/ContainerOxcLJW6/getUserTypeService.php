<?php

namespace ContainerOxcLJW6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\UserType' shared autowired service.
     *
     * @return \App\Form\Type\UserType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/UserType.php';

        return $container->privates['App\\Form\\Type\\UserType'] = new \App\Form\Type\UserType();
    }
}

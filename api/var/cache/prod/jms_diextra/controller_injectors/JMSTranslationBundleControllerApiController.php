<?php

namespace JMS\TranslationBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ApiController__JMSInjector
{
    public static function inject($container) {
        $instance = new \JMS\TranslationBundle\Controller\ApiController();
        $refProperty = new \ReflectionProperty('JMS\\TranslationBundle\\Controller\\ApiController', 'configFactory');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('jms_translation.config_factory', 1));
        $refProperty = new \ReflectionProperty('JMS\\TranslationBundle\\Controller\\ApiController', 'updater');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('jms_translation.updater', 1));
        return $instance;
    }
}
<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit74663333b4de78f1b2ff7e50a5833ad1
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit74663333b4de78f1b2ff7e50a5833ad1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit74663333b4de78f1b2ff7e50a5833ad1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit74663333b4de78f1b2ff7e50a5833ad1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
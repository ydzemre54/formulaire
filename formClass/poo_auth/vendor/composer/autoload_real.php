<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf32fcfc707f5fd27a85f247d8cd4b75c
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

        spl_autoload_register(array('ComposerAutoloaderInitf32fcfc707f5fd27a85f247d8cd4b75c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf32fcfc707f5fd27a85f247d8cd4b75c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf32fcfc707f5fd27a85f247d8cd4b75c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
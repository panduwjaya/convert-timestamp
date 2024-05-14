<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitea55f05f3ae8a1e7997835ff2e006355
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

        spl_autoload_register(array('ComposerAutoloaderInitea55f05f3ae8a1e7997835ff2e006355', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitea55f05f3ae8a1e7997835ff2e006355', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitea55f05f3ae8a1e7997835ff2e006355::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3fb8377eb92a3ec0f28ad9a9bd43a17d
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

        spl_autoload_register(array('ComposerAutoloaderInit3fb8377eb92a3ec0f28ad9a9bd43a17d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3fb8377eb92a3ec0f28ad9a9bd43a17d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3fb8377eb92a3ec0f28ad9a9bd43a17d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
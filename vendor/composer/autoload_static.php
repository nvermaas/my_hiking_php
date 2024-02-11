<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74677c60a87aa70079271fa16e97761a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74677c60a87aa70079271fa16e97761a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74677c60a87aa70079271fa16e97761a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74677c60a87aa70079271fa16e97761a::$classMap;

        }, null, ClassLoader::class);
    }
}

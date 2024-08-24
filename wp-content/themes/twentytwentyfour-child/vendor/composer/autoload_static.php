<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56285bd57ae8f4a64fd55c8600c49584
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56285bd57ae8f4a64fd55c8600c49584::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56285bd57ae8f4a64fd55c8600c49584::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56285bd57ae8f4a64fd55c8600c49584::$classMap;

        }, null, ClassLoader::class);
    }
}

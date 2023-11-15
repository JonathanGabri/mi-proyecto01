<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e97c30af5e99aa4f44420b8f4685c76
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jonathan\\Saludo\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jonathan\\Saludo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e97c30af5e99aa4f44420b8f4685c76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e97c30af5e99aa4f44420b8f4685c76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e97c30af5e99aa4f44420b8f4685c76::$classMap;

        }, null, ClassLoader::class);
    }
}

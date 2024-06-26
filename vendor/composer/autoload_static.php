<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit879a0580b013e0cb620d15a2ac3f6004
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kvong\\Usd\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kvong\\Usd\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/curl/curl/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit879a0580b013e0cb620d15a2ac3f6004::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit879a0580b013e0cb620d15a2ac3f6004::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit879a0580b013e0cb620d15a2ac3f6004::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit879a0580b013e0cb620d15a2ac3f6004::$classMap;

        }, null, ClassLoader::class);
    }
}

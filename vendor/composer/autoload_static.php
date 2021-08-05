<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10f28a592b6769cb9696bbaaf47e2ae2
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imsidz\\Delhivery\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imsidz\\Delhivery\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit10f28a592b6769cb9696bbaaf47e2ae2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10f28a592b6769cb9696bbaaf47e2ae2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10f28a592b6769cb9696bbaaf47e2ae2::$classMap;

        }, null, ClassLoader::class);
    }
}

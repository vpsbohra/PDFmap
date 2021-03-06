<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06a6ce1ef3be8067265745adb729e8c6
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mikehaertl\\tmp\\' => 15,
            'mikehaertl\\shellcommand\\' => 24,
            'mikehaertl\\pdftk\\' => 17,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mikehaertl\\tmp\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-tmpfile/src',
        ),
        'mikehaertl\\shellcommand\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/src',
        ),
        'mikehaertl\\pdftk\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-pdftk/src',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06a6ce1ef3be8067265745adb729e8c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06a6ce1ef3be8067265745adb729e8c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06a6ce1ef3be8067265745adb729e8c6::$classMap;

        }, null, ClassLoader::class);
    }
}

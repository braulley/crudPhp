<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2765136489bfb0444c8d9a2ad7238698
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2765136489bfb0444c8d9a2ad7238698::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2765136489bfb0444c8d9a2ad7238698::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
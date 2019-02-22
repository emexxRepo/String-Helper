<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit165f3f1c96ec825e733a6fe7e7186a39
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Major\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Major\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit165f3f1c96ec825e733a6fe7e7186a39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit165f3f1c96ec825e733a6fe7e7186a39::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

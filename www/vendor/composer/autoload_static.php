<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit385872bfced3eafdfd84e9ce0cf632af
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/classes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit385872bfced3eafdfd84e9ce0cf632af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit385872bfced3eafdfd84e9ce0cf632af::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
